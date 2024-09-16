<?php

class App extends Trongate{
      

  private $trackParam = ['track' => 1];
  private $inStockParam = ['in_stock' => 1];

    public function login(): void {
        $data['view_module'] = 'App';
        $data['view_file'] = 'login';
        $this->template('surecow_admin', $data);
        }
    
    public function register(): void {
        $data['view_module'] = 'App';
        $data['view_file'] = 'register';
        $this->template('surecow_admin', $data);
        }

    // Handles account login
    function login_account() {
    $this->validation_helper->set_rules('email', 'email', 'required|callback_login_check');
    $this->validation_helper->set_rules('password', 'password', 'required');
  
    if (!$this->validation_helper->run()) {
        $this->login();
    } else {
        $email = post('email');
        $this->_logged_in($email);
    }
  }
    

  function _verify_hash(string $plain_text, string $hashed_string): bool {
    return password_verify($plain_text, $hashed_string);
  }



     // Validates  credentials and redirects to the appropriate page
function _logged_in($email) {
    $user = $this->model->get_one_where('email', $email, 'account');
    $user_id = $user->trongate_user_id;
  
    $this->module('trongate_tokens');
    $token_data['user_id'] = $user_id;
    $this->trongate_tokens->_generate_token($token_data);
  
    $user_type = $this->model->query_bind('SELECT user_type FROM account WHERE email = :email', ['email' => $email], 'object')[0]->user_type;
  
   // Determine the redirect URL based on the user type
switch ($user_type) {
  case "agent":
      $redirect_url ='app/agent_dashboard';
      break;
  case "admin":
      $redirect_url = admin_dashboard();
      break;
  case "costumer":
      $redirect_url = costumer_dashboard();
      break;
  default:
      $redirect_url = login();
      break;
}

// Use the null coalescing operator to redirect based on the last visited page or the determined URL
$redirect_url = $_SESSION['last_page'] ?? $redirect_url;
    unset($_SESSION['last_page']);
  
    redirect($redirect_url);
  }
  
  // Validates  details and returns appropriate errors
  function login_check($email) {
    $error = 'Your email does not exist in our database, please register!';
    $password_error = 'Password is not correct!';
    $access_error = 'You do not have access! Contact the administrator.';
  
    $user = $this->model->get_one_where('email', $email, 'account');
    $access = $this->model->query_bind('SELECT access FROM account WHERE email = :email', ['email' => $email], 'object')[0]->access;
  
    if ($access == '0') {
        return $access_error;
    }
  
    if (!$user) {
        return $error;
    }
  
    $password = post('password');
    if ($this->_verify_hash($password, $user->password)) {
        return true;
    } else {
        return $password_error;
    }
  }

  
  // Access control for sales team
  function _make_sure_allow_agent() {
    $this->module('trongate_tokens');
    $token = $this->trongate_tokens->_attempt_get_valid_token(2);
    if (!$token) {
      set_flashdata('Please login first');
        redirect('app/login');
    }
    return $token;
  }
  
  // Access control for butcheries
  function _make_sure_allow_admin() {
    $this->module('trongate_tokens');
    $token = $this->trongate_tokens->_attempt_get_valid_token(3);
    if (!$token) {
      set_flashdata('Please login first');
      redirect('app/login');
    }
    return $token;
  }
  
  // Logs out the user
  function logout() {
    session_start();
    $this->module('trongate_tokens');
    $this->trongate_tokens->_destroy();
    redirect('users/index');
  }


   // Processes account creation
   public function create_account(): void {
    $data = $this->_get_new_user_data();
    $trongateUserData = [
        'code' => make_rand_str(32),
        'user_level_id' => $data['user_type'] === 'butchery' ? 3 : 2
    ];
    $trongateUserId = $this->model->insert($trongateUserData, 'trongate_users');
    $data['trongate_user_id'] = $trongateUserId;

    if ($this->validateAccountCreation()) {
        $params = ['email' => $data['email']];
        $rows = $this->model->query_bind('SELECT * FROM account WHERE email = :email', $params, 'object');

        if (!empty($rows)) {
            $this->setFlashAndRedirect('This email has already been used to create an account', 'register');
        } else {
            $this->sendRegistrationEmailAndInsert($data);
            
        }
    } else {
        $this->register();
    }
}

// Retrieves new user data from the form
function _get_new_user_data(): array {
  return [
      'firstname' => post('firstname', true),
      'lastname' => post('lastname', true),
      'user_type' => post('user_type', true),      
      'password' => $this->_hash_string(post('password')),
      'email' => post('email', true),
  ];
}

  // Hashes a string using bcrypt
  private function _hash_string(string $str): string {
    return password_hash($str, PASSWORD_BCRYPT, ['cost' => 11]);
}


private function validateAccountCreation(): bool {
  $this->validation_helper->set_rules('firstname', 'First name', 'required');
  $this->validation_helper->set_rules('lastname', 'Last name', 'required');
  $this->validation_helper->set_rules('email', 'Email', 'required');
  $this->validation_helper->set_rules('password', 'password', 'required|min_length[6]|max_length[55]');
  $this->validation_helper->set_rules('confirm', 'confirm', 'required|matches[password]');
  return $this->validation_helper->run();
}


private function sendRegistrationEmailAndInsert(array $data): void {
  $targetUrl = 'https://meat247.com/user/';
  $sent=$this->_send_registration_confirm_email($data, $targetUrl);
  $this->model->insert($data, 'account');
 /* 
  if($sent === false){
    set_flashdata('Message not sent, make sure you are connected to the internet');
    $this->register();
  }else{
  $this->model->insert($data, 'account');
  set_flashdata('Welcome pls confirm your registration and login into your account');
  $this->register();
  } */
}

function _send_registration_confirm_email($user_obj, $target_url){ 
  $data['subject'] = 'Meat247 Registration';
  $data['target_name'] = $user_obj['firstname'];
  $data['user_obj'] = $user_obj;
  $data['target_url'] = $target_url;
  $data['target_email'] = $user_obj['email'];  
  $data['msg_html'] = $this->view('_msg_registration_confirm_email',$data,true);
  $msg_plain = str_replace('</p>', '\\n\\n', $data['msg_html']);
  $data['msg_plain'] = strip_tags($msg_plain);
  $this->module('mailman');
  $sent =$this->mailman->_send_my_email($data); 
  return $sent !== false;  
}



private function setFlashAndRedirect(string $message, string $redirectMethod): void {
  set_flashdata($message);
  $this->$redirectMethod();
}


  // Loads the overview page and fetches all the necessary data to be displayed
  public function agent_dashboard(): void {
    $this->module('trongate_security');
    $token = $this->trongate_security->_make_sure_allowed('agent');
    $_SESSION['last_page'] = 'app/agent_dashboard';

    // Fetch user and token data
    //$tokenObj = $this->trongate_tokens->_fetch_token_obj($token);
    $data['user_data'] = $this->_get_user_data($token);

    // Fetch sales and visit data
    //$data['total_amount'] = $this->getTotalSales();
    //$data['num_total_sales'] = $this->getSalesCount();
    //$data['num_total_visits'] = $this->getVisitCount();
    //$data['num_unique_visits'] = $this->model->count('cart');
    //$data['checkout_count'] = $this->model->count('checkout');
    //$data['all_visits'] = $this->model->count('visits');
    //$data['monthly_sales'] = $this->getEachMonthTotal();
    //$data['list_order'] = $this->getAllOrders();

    // Fetch limited product details
    //$data['products'] = $this->getInStockProducts();

    // Set view for the dashboard
    $data['view_module'] = 'app';
    $data['view_file'] = '_agent_area';
    $this->template('surecow_admin', $data);
}

 // Fetch user data based on token
 private function _get_user_data($token) {
  $params = ['token' => $token];
  $sql = 'SELECT a.id, t.user_id, a.firstname, a.lastname, a.access, a.email, a.picture, t.token
          FROM trongate_tokens t
          INNER JOIN account a ON a.trongate_user_id = t.user_id
          WHERE t.token = :token';
  return $this->model->query_bind($sql, $params, 'object');
}

  // Helper Methods
  private function getTotalSales() {
    $sql = 'SELECT SUM(total_amount) as total FROM checkout WHERE track = :track';
    $data = $this->model->query_bind($sql, $this->trackParam, 'object');
    return $data ? $data[0]->total : '0';
}

 // Get visit count for products in stock
 private function getVisitCount() {
  $sql = 'SELECT SUM(views) as total 
          FROM product_details 
          WHERE in_stock = :in_stock';
  $data = $this->model->query_bind($sql, $this->inStockParam, 'object');
  return !empty($data[0]->total) ? $data[0]->total : '0';
}

  // Get total sales for each month
  private function getEachMonthTotal() {
    $sql = "SELECT MONTH(date_checkout) AS month, 
                   SUM(total_amount) AS total_sales 
            FROM checkout 
            WHERE track = :track 
            GROUP BY MONTH(date_checkout)";
    $data = $this->model->query_bind($sql, $this->trackParam, 'object');
    return $data ? $data[0]->total_sales : '0';
}

  // Fetch all orders
  private function getAllOrders() {
    $sql = "SELECT * 
            FROM checkout 
            WHERE track = :track";
    return $this->model->query_bind($sql, $this->trackParam, 'object');
}
private function getInStockProducts() {
  $sql = 'SELECT * FROM product_details WHERE in_stock = :in_stock LIMIT 7';
  return $this->model->query_bind($sql, $this->inStockParam, 'object');
}


    
    }
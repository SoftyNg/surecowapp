<body class="" style="background-color:#5F9C79;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
	  <img src="<?= BASE_URL?>/images/sclogosmall.png" 
	  alt="Company Name" class="logo">
	  </a>

      <!-- Toggler/collapsible Button for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
	  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links and Dropdown -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <!-- Home link -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action 1</a></li>
              <li><a class="dropdown-item" href="#">Action 2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else</a></li>
            </ul>
          </li>
        </ul>

        <!-- Buttons aligned to the right -->
        <div class="d-flex">
          <button class="btn btn-outline-primary me-2" type="button">Login</button>
          <button class="btn btn-primary" type="button">Register</button>
        </div>
      </div>
    </div>
  </nav>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                                    <?php    
                            flashdata();
                              echo form_open('app/login_account',array(
                              "class" =>"user"));                         
                       
                             echo validation_errors();
                             echo " <div class='form-group'>";                           
                             echo form_input('email','',array("placeholder" =>
                              "Enter email address","class" =>"form-control form-control-user",
                             "id"=>"email"));    
                             echo " </div>";                           
                             
                                                                        
                             echo " <div class='form-group'>";
                             echo form_label('Password');
                             echo form_password('password','',
                             array("placeholder" => "","class"=>"form-control form-control-user","id"=>"name")); 
                             echo " <div>
                             
                             <hr>"; 

                             echo " <div class='form-group'>";                        
                             echo form_submit('Submit','Login to your account',array("class" =>"btn btn-primary btn-user btn-block")); 
                             echo " <div>"; 

                             echo "                                    
                                
                                    <hr>
                                    <div class='text-center'>
                                        <a href='recover'>Forgot Password?</a></p> <p>
                                        
                                    </div>
                                    <div class='text-center'>
                                        <a href='register'>Register here</a>
                                    </div>";

 
                            
                             
                              echo form_close();
                              ?>
                                    
                                      
                                       
                                
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-lg-7 d-none d-lg-block bg-register-image">
                    <img src="<?= BASE_URL?>/images/cowhead.png" alt="design">
                    </div>
        </div>

    </div>
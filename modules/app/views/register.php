<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?php    
                            flashdata();
                              echo form_open('app/create_account',array(
                              "class" =>"user"));                         
                       
                             echo validation_errors();
                             echo " <div class='form-group row'>";  
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('firstname','',array("placeholder" =>
                              "Enter First name","class" =>"form-control form-control-user",
                             "id"=>"firtname"));    
                             echo " </div>";
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('lastname','',array("placeholder" =>
                              "Last name","class" =>"form-control form-control-user",
                             "id"=>"lastname"));    
                             echo " </div>";
                             echo " </div>";


                             echo " <div class='form-group'>";                           
                             echo form_input('email','',array("placeholder" =>
                              "Enter email address","class" =>"form-control form-control-user",
                             "id"=>"email"));    
                             echo " </div>";   
                             
                             echo " <div class='form-group'>";
                             echo form_label('Account type');                           
                             $attr['class'] = 'form-control';
                             $select ['costumer'] = 'Costumer';                            
                             $select ['agent'] = 'Agent';
                             $select ['admin'] = 'Admin';
                             echo form_dropdown('user_type',$select,'agent',$attr);
                             echo "</div>"; 
                             
                                                                        
                             echo " <div class='form-group row'>";  
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_password('password','',array("placeholder" =>
                              "","class" =>"form-control form-control-user",
                             "id"=>"password"));    
                             echo " </div>";
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_password('confirm','',array("placeholder" =>
                              "","class" =>"form-control form-control-user",
                             "id"=>"confirm"));    
                             echo " </div>";
                             echo " </div>";
                             
                             

                             echo " <div class='form-group'>";                        
                             echo form_submit('Submit','Create an account',array("class" =>"btn btn-primary btn-user btn-block")); 
                             echo " <div>"; 

                             echo "                                    
                                
                                    <hr>
                                   
                                    <div class='text-center'>
                                        <a href='login'>Login</a>
                                    </div>";

 
                            
                             
                              echo form_close();
                              ?>
                          
                             
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
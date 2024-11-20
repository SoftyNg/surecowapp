
<?php require_once ("_sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  <h3>SureCow</h3>

                  <?php require_once ("_navigation.php"); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">


                   

                    <div class="row">

                      
                        <div class="col-xl-12 col-lg-12">
                             <!-- Content Row -->
                    <div class="row">


<!-- Earnings (Monthly) Card Example -->
<div class=" col-md-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">All Total sales
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">₦ 
<?php//$total_amount; ?></div>
                        </div>
                      
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-md-4 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Premiums this month</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //$num_total_sales; ?></div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Total Clients</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php // $all_visits; ?></div>
                </div>
               
            </div>
        </div>
    </div>
</div>

</div>

<!-- Content Row -->

                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            
                            
                        </div>
                    </div>

                    <!-- Content Row -->




                    <div class="row">                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                                 <!-- Begin Page Content -->
                <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-12">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
    </div>
<div class="card-body">








<div class="row">
<div class="col-md-6">
   <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                   <div class="card-header py-3 text-center">
                         <h6 class="m-0 font-weight-bold text-primary">Add client's bio-data</h6>
                   </div>
        
        <?php    
                            flashdata();
                              echo form_open('app/add_client',array(
                              "class" =>"user"));                         
                       
                             echo validation_errors();
                             echo " <div class='form-group row'>";  
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('firstname','',array("placeholder" =>
                              "Enter First name","class" =>"form-control form-control-user",
                             "id"=>"firtname"));    
                             echo " </div>";

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('midname','',array("placeholder" =>
                              "Middle name","class" =>"form-control form-control-user",
                             "id"=>"lastname"));    
                             echo " </div>";                            
                             echo " </div>";

                             echo " <div class='form-group row'>";

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                                                    
                             echo form_input('lastname','',array("placeholder" =>
                              "Last name","class" =>"form-control form-control-user",
                             "id"=>"lastname"));                               
                             echo " </div>";                              

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                                                       
                             echo form_input('email','',array("placeholder" =>
                              "Enter email address","class" =>"form-control form-control-user",
                             "id"=>"email")); 
                             echo " </div>"; 

                             echo " </div>"; 

                             echo " <div class='form-group row'>";
                             echo form_label('Address:');                           
                             echo form_textarea('address','',array("placeholder" =>
                              "Enter address here","class" =>"form-control form-control-user",
                             "id"=>""));
                             echo "</div>"; 
                             

                             echo " <div class='form-group row'>";  

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('phone','',array("placeholder" =>
                              "Phone number here","class" =>"form-control form-control-user",
                             "id"=>""));    
                             echo " </div>";                                                                        
                            
                             echo "<div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('lga','',array("placeholder" =>
                              "LGA","class" =>"form-control form-control-user",
                             "id"=>""));    
                             echo " </div>";

                             echo " </div>";
                             


                             echo " <div class='form-group row'>"; 
                             
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('','',array("placeholder" =>
                              "State","class" =>"form-control form-control-user",
                             "id"=>"confirm"));    
                             echo " </div>";

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('Country','',array("placeholder" =>
                              "Country","class" =>"form-control form-control-user",
                             "id"=>""));    
                             echo " </div>";
                           
                             echo " </div>";
                            
                             echo "<div class='form-group'>";  
                             echo form_hidden('agent_id',$id,array("placeholder" =>
                            $id,"class" =>"form-control form-control-user",
                            "id"=>"confirm"));                       
                            echo " <div>"; 

                             echo "                
                                
                                    <hr>                                   
                                  ";

 
                            
                           
                              ?>
                          
                        </div>
                    </div>
                </div>
            </div>
         </div>
        

      </div>
    </div>




    <div class="col-md-6">
   <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                   <div class="card-header py-3 text-center">
                         <h6 class="m-0 font-weight-bold text-primary">Business or farm-data</h6>
                   </div>
        
                   <?php    
                          

                           
                             echo " <div class='form-group'>";
                             echo form_label('Farm type');                           
                             $attr['class'] = 'form-control';
                             $select ['ranch'] = 'Ranch';                            
                             $select ['free'] = 'Free Range';
                             
                             echo form_dropdown('user_type',$select,'ranch',$attr);
                             echo "</div>";
                            

                             echo " <div class='form-group row'>";  
                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('firstname','',array("placeholder" =>
                              "Farm or Ranch name","class" =>"form-control form-control-user",
                             "id"=>"firtname"));    
                             echo " </div>";
                           
                             echo " </div>";  
                             
                             echo " <div class='form-group'>";
                             echo form_label('Address:');                           
                             echo form_textarea('address','',array("placeholder" =>
                              "Farm or Ranch address","class" =>"form-control form-control-user",
                             "id"=>""));
                             echo "</div>"; 
                             
                                                                        
                             echo " <div class='form-group row'>"; 

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('lga','',array("placeholder" =>
                              "LGA","class" =>"form-control form-control-user",
                             "id"=>""));    
                             echo " </div>";

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_input('state','',array("placeholder" =>
                              "State","class" =>"form-control form-control-user",
                             "id"=>"confirm"));    
                             echo " </div>";

                             echo " </div>";
                             echo " <div class='form-group row'>"; 

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_number('yib','',array("placeholder" =>
                              "Years in business","class" =>"form-control form-control-user",
                             "id"=>""));    
                             echo " </div>";

                             echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                         
                             echo form_number('nbof','',array("placeholder" =>
                              "Number of staff","class" =>"form-control form-control-user",
                             "id"=>"confirm"));    
                             echo " </div>";

                             echo " </div>";                            
                         

                             echo "                                    
                                
                                    <hr>
                                    <div class='card-header py-3 text-center'>
                         <h6 class='m-0 font-weight-bold text-primary'>Farm/cattle status</h6>
                   </div>
                                  "; 
                                  
                                  echo form_label('Have been enrolled in the following programs:'); 

                                  echo '<div class"form-group row">';   
                                  echo " <div class='col-sm-6 mb-3 mb-sm-0'>";                               
                                  echo 'Hoina ';
                                  echo form_checkbox('hoina', 1, '');
                                  
                                  echo 'AIMS';
                                  echo form_checkbox('aims', 1, '');
                                  echo '</div>';
                                  echo '</div>';

                          
                              ?>                          
                        </div>
                    </div>
                </div>
            </div>
         </div>       

      </div>
    </div>
</div>


<div class="row">
<div class="col-md-6">
   <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                   <div class="card-header py-3 text-center">
                         <h6 class="m-0 font-weight-bold text-primary">Financial situation / needs</h6>
                   </div>
        
        <?php    
                          
                             echo '<div class="row">  
                                                    
                             <div class="col">
                             <div class="card border-left-info shadow h-100 py-2">
                                 <div class="card-body">
                                     
                                       <div class="text-xs font-weight-bold text-info text-uppercase">
                                      Annual Income</div>
                                        <div class="col">';
                                      
                                         echo form_radio('annual_income','20M and under'); echo ' N20M and under';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_income','N20M to N50M'); echo ' N20M to N50M';
                                    
                                        echo '</br>';
                                         echo form_radio('annual_income','N50M to N100M'); echo ' N50M to N100M';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_income','N200 to N500M'); echo ' N200 to N500M';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_income','N500 and higher'); echo ' N500 and higher';
                                        echo '</div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                             <div class="card border-left-danger shadow h-100 py-2">
                                 <div class="card-body">
                                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Net worth</div>
                                        <div class="col">';
                                      
                                         echo form_radio('net_worth','20M and under'); echo ' N20M and under';
                                        
                                        echo '</br>';
                                         echo form_radio('net_worth','N20M to N50M'); echo ' N20M to N50M';
                                    
                                        echo '</br>';
                                         echo form_radio('net_worth','N50M to N100M'); echo ' N50M to N100M';
                                        
                                        echo '</br>';
                                         echo form_radio('net_worth','N200 to N500M'); echo ' N200 to N500M';
                                        
                                        echo '</br>';
                                         echo form_radio('net_worth','N500 and higher'); echo ' N500 and higher';
                                        echo '</div>
                                        
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                             <div class="card border-left-warning shadow h-100 py-2">
                                 <div class="card-body">
                                     
                                       <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Liquid networth</div>
                                          <div class="col">';
                                      
                                         echo form_radio('liquid_networth','20M and under'); echo ' N20M and under';
                                        
                                        echo '</br>';
                                         echo form_radio('liquid_networth','N20M to N50M'); echo ' N20M to N50M';
                                    
                                        echo '</br>';
                                         echo form_radio('liquid_networth','N50M to N100M'); echo ' N50M to N100M';
                                        
                                        echo '</br>';
                                         echo form_radio('liquid_networth','N200 to N500M'); echo ' N200 to N500M';
                                        
                                        echo '</br>';
                                         echo form_radio('liquid_networth','N500 and higher'); echo ' N500 and higher';
                                        echo '</div>
                                     </div>
                                 </div>
                             </div>
                           </div>
                           
                           
                           <div class="row">  
                                                    
                             <div class="col">
                             <div class="card border-left-info shadow h-100 py-2">
                                 <div class="card-body">
                                     
                                       <div class="text-xs font-weight-bold text-info text-uppercase">
                                      Annual Expenses</div>
                                        <div class="col">';
                                      
                                         echo form_radio('annual_exp','2M and under'); echo ' N2M and under';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_exp','N2M to N5M'); echo ' N2M to N5M';
                                    
                                        echo '</br>';
                                         echo form_radio('annual_exp','N5M to N10M'); echo ' N5M to N10M';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_exp','N20 to N50M'); echo ' N20 to N50M';
                                        
                                        echo '</br>';
                                         echo form_radio('annual_exp','N50 and higher'); echo ' N50 and higher';
                                        echo '</div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                             <div class="card border-left-danger shadow h-100 py-2">
                                 <div class="card-body">
                                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Special expenses(non-recurring)</div>
                                        <div class="col">';
                                      
                                         echo form_radio('special_exp','2M and under'); echo ' N2M and under';
                                        
                                        echo '</br>';
                                         echo form_radio('special_exp','N2M to N5M'); echo ' N2M to N5M';
                                    
                                        echo '</br>';
                                         echo form_radio('special_exp','N5M to N10M'); echo ' N5M to N10M';
                                        
                                        echo '</br>';
                                         echo form_radio('special_exp','N20 to N50M'); echo ' N20 to N50M';
                                        
                                        echo '</br>';
                                         echo form_radio('special_exp','N50 and higher'); echo ' N50 and higher';
                                        echo '</div>
                                        
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                             <div class="card border-left-warning shadow h-100 py-2">
                                 <div class="card-body">
                                     
                                       <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Liquid needs</div>
                                          <div class="col">';
                                        echo '</br>';
                                         echo form_radio('liquid_needs','Very important'); echo ' Very important';
                                    
                                        echo '</br>';
                                         echo form_radio('liquid_needs','Somewhat important'); echo ' Somewhat important';
                                        
                                        echo '</br>';
                                         echo form_radio('liquid_needs','Important'); echo ' Important';
                                        
                                        echo '</br>';
                                         echo form_radio('liquid_needs','Does not important'); echo ' Does not matter';
                                        echo '</div>
                                     </div>
                                 </div>
                             </div>
                           </div>';

                          

                             echo "<p>
                             <ol>
                             <li> 	
                             Annual income includes income from sources such as employment, alimony,
                              social security, investment income, etc.</li>
<li>Net worth is the value of your assets minus your liabilities. For purposes of this application, 
assets include stocks, bonds, mutual funds, other securities, bank accounts, and other personal property. 
Do not include your primary residence among your assets. For liabilities, include any outstanding loans, 
credit card balances, taxes, etc. Do not include your mortgage.</li>
<li>Liquid net worth is your net worth minus assets that cannot be converted quickly and easily into cash, 
such as real estate, business equity, personal property and automobiles, expected inheritances, assets
 earmarked for other purposes, and investments or accounts subject to substantial penalties if they were 
 sold or if assets were withdrawn from them.</li>
<li>Annual expenses might include mortgage payments, rent, long-term debts, utilities, alimony or 
child support payments, etc.</li>
<li>Special expenses might include a home purchase, remodeling a home, a car purchase, education, medical expenses, 
etc.</li>
<li> The ability to quickly and easily convert to cash all or a portion of the investments 
                                      in this account without experiencing significant loss in value from, for example, 
                                      the lack of a ready market, 
                                      or incurring significant costs or penalties </li>

</ol></p>"; 
                             
                            
                             echo "<div class='form-group'>";  
                             echo form_hidden('agent_id',$id,array("placeholder" =>
                            $id,"class" =>"form-control form-control-user",
                            "id"=>"confirm"));                       
                            echo " <div>"; 

                             echo "                
                                
                                    <hr>                                   
                                  ";

 
                            
                           
                              ?>
                          
                        </div>
                    </div>
                </div>
            </div>
         </div>
        

      </div>
    </div>


    

    <div class="col-md-6">
   <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                   <div class="card-header py-3 text-center">
                         <h6 class="m-0 font-weight-bold text-primary">Other needed information</h6>
                   </div>
        
                   <?php    
                          
                         echo ' <div class="row">  
                                                    
                          <div class="col">
                          <div class="card border-left-info shadow h-100 py-2">
                              <div class="card-body">
                                  
                                    <div class="text-xs font-weight-bold text-info text-uppercase">
                                   The investment will be</div>
                                     <div class="col">';
                                   
                                      echo form_radio('investment','1/10'); echo ' 1/10 of my financial portfolio';
                                     
                                     echo '</br>';
                                      echo form_radio('investment','2/10'); echo ' 2/10 of my financial portfolio';
                                 
                                    
                                     echo '</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                          <div class="card border-left-danger shadow h-100 py-2">
                              <div class="card-body">
                                   <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                     I plan to cover for the following:</div>
                                     <div class="col">';
                                   
                                      echo form_checkbox('accident', 1, ''); echo ' Accident';
                                     
                                     echo '</br>';
                                     echo form_checkbox('diseases', 1, ''); echo ' Diseases';
                                 
                                     echo '</br>';
                                     echo form_checkbox('surgical operations', 1, ''); echo ' Surgical operations';
                                     echo '</br>';
                                     echo form_checkbox('riot or strikes', 1, ''); echo ' Riot or Strikes';
                                     echo '</br>';
                                     echo form_checkbox('theft/rustling', 1, ''); echo ' Theft/Rustling';
                                     echo '</br>';
                                     echo form_checkbox('ptd', 1, ''); echo ' PTD(Permanent Total Disability';
                                     echo '</br>';
                                     echo form_checkbox('death', 1, ''); echo ' Death';
                                     echo '</div>
                                     
                                  </div>
                              </div>
                          </div>
                         
                        </div>';

                             
                             
                             echo " <div class='form-group'>";
                             echo form_label('Tell us more about you:');                           
                             echo form_textarea('address','',array("placeholder" =>
                              "More details here...","class" =>"form-control form-control-user",
                             "id"=>""));
                             echo "</div>"; 
                             
                             echo "                                    
                                
                                    <hr>
                                 <p><b>About this Application</b></p>
                                 <p>This is a Surecow plan application. 
                                 Submitting this form means you agree to certain provisions that will govern
                                  our relationship. When we accept it, this Application and all accompanying or 
                                  supplemental documents form the entire Agreement between us for this account.
Unless otherwise indicated in this Application, the words “you,” “your,” “yourself,” and “yours” mean the applicant(s). The 
words “we,” “us,” and “our” mean {Livestock247 in respect to Surecow} and our branches, subsidiaries, and 
affiliates. </p>
<p>
Getting Started 
</p>
Please complete this Application, along with any required supplemental forms identified through this
 application process. 
In order to complete this Application, you will need some or all of the following information: 
    <ul>
<li>Identification information, such as a driver’s license, passport, or 
another type of government-issued identification </li>
<li>Information about your annual income, debt, expenses, and net worth </li>
<li>Animal Identication details</li>
</ul>
The above information helps us comply with various securities regulations and rules and to verify, and record information that identifies each applicant. 
The information also helps us more fully understand your profile and identify what types of plans may be suitable for you. Please note: if we cannot verify the information you provide, we may be required to restrict or deny your account.
Please remember to notify us if you experience a significant in your business. 

                                  "; 
                                  
                               

                                  echo "<div class='form-group'>";                        
                             echo form_submit('Submit','Add client',
                             array("class" =>"btn btn-primary btn-user btn-block")); 
                             echo " <div>";
                             echo "       <hr>"; 
                                  echo form_close();
                              ?>                          
                        </div>
                    </div>
                </div>
            </div>
         </div>       

      </div>
    </div>
</div>


</div>

</div>
<!-- /.container-fluid -->

                           
                           

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <?php require_once ("_footer.php"); ?>

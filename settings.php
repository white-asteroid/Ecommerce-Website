<?php 
   include 'includes\common.php';
   if(!isset($_SESSION['email']))
   {
       header('location:products.php');
   }
   
   ?>
<html>
   <head>
      <title>Lifestyle store</title>
      <meta charset="UTF-8">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <!--jQuery library--> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!--Latest compiled and minified JavaScript--> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="stylephp.css" rel="stylesheet" type="text/css"/>
      <!-- my css file-->
      
   </head>
   <body>
      <?php 
         include 'includes\header.php';
         ?>
      <div style="top:20px ;position: relative; padding: 50px;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0" style="text-align:left ;">
                   <div class="text-uppercase text-center alert-danger" style="font-weight:bold">
                       <?php
                       if(isset($_GET['erm']))
                       {
                           echo $_GET['erm'];
                       }?>
                   </div>
                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        change password
                     </div>
                     <div class="panel-body">
                        <p class="text-warning ">Set a strong Password</p>
                        <form method="post" action="settings_script.php">
                           <div class="form-group">
                               <label for="pass">Old Password</label>
                              <input type="password" class ="form-control" name="opass" id="opass" placeholder="password123*">
                           </div>
                            <div class="form-group">
                                <label for="npass">New Password</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="npass" name="npass" placeholder="Password" class="form-control">
                                                    
                        </div>
                            <div class="form-group">
                                <label for="cpass">Retype Password</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="cpass" name="cpass" placeholder="Password" class="form-control">
                                                    
                        </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg">Change</button>
                           </div>
                           <br><br>
                           <div class="panel-footer">
                               <span class="text-info">Already have an account?</span><a href="login.php" class="text-primary">Log in</a>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>
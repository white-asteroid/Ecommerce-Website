<?php
    include 'includes\common.php';
    if(isset($_SESSION['email']))
    {
        header('location: products.php');
    }
    ?>
<!DOCTYPE html>
<!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.-->
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
        <div class="container" style="margin-top:5%;">
            <div class="row">
                <div class="col-xs-10 col-md-3">
                    <img src="img/watch.PNG" alt="Sigup_jpg" class="img-responsive " />
                </div>
                <div class="col-md-4 col-md-offset-4 col-xs-11" style="text-align:left ;">
                    <p style="font-size: 30px ;font-weight: bold" >Sign Up</p>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   placeholder="abc@gmail.com" 
                                   class="form-control"
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                   title="Invalid Email"
                                   required
                                   >
                         <?php   if(isset($_SESSION['err']))
                         {
                             echo "Error in email id";
                         } ?>
                        </div>
                        <div class="form-group">
                            <input type="password" 
                                   
                                   titl="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" 
                                   id="pass" 
                                   name="pass" 
                                   placeholder="Password" class="form-control"
                                   required>
                        </div>
                        <div class="form-group" >
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   placeholder="Contact" 
                                   class="form-control" 
                                   pattern="[0-9]{10}"
                                   title="Enter 10 digit mobile number"
                                   required
                                   >
                        </div>
                        <div class="form-group">
                            <input type="text" id="city" placeholder="City" name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="add" id="add" placeholder="Address" name="add" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg" style="margin-bottom: 20px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'includes\footer.php';?>
    </body>
</html>
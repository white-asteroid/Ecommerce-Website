<?php
include 'common.php';
?>


    <footer>
        <div class="container-fluid">
            <div class="rows" >
                <div class="col-xs-1 col-md-2">
                    <h4>Information</h4>
                    <a href="about.php" style="text-decoration: none;color: #ffffff;">About us</a><br>
                    <a href="contactus.php" style="text-decoration: none;color: #ffffff;">Contact us</a>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-md-2 col-md-offset-2">
                    
                    <h4>My Account</h4>
                    <?php if(isset($_SESSION['email']))
                    {?>
                    <p style="color: #ffffff;">Logged in</p>
                    <a href="logout.php" style="color: #ffffff;">Log out</a> 
                    <?php }
                    else{ ?>
                    <a data-toggle="modal" data-target="#qbx" style="text-decoration: none;color: #ffffff;">Log in</a><br>
                    <a href="signup.php" style="text-decoration: none;color: #ffffff;">Sign up</a>
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-md-2 col-md-offset-2">
                    <h4>Contact us</h4>
                    <p style="text-decoration: none;color: #ffffff;">99xxxxxxxx</p>
                    
                </div>
            </div>
            
       </div>
    </footer>

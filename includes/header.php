
<?php
include 'common.php';?>

<div class="navbar navbar-default navbar-fixed-top" style="position: fixed;">
         <div class="container">
            <div class="navbar-header">
               <a class="navbar-brand" href="mainphp.php">Chuchil</a>
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar2">
               <ul class="nav navbar-nav navbar-right">
                  <?php 
                  
                     if (!isset($_SESSION['email']))
                     {
                     ?>
                  <li>
                     <a href="signup.php" >
                     <span class="glyphicon glyphicon-user " >Sign up</span>
                     </a>
                  </li>
                  <li><a data-toggle="modal" data-target="#qbx"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
                  <?php }
                     else {
                         ?>
                  <li>
                     <a href="cart.php">
                     <span class="glyphicon glyphicon-shopping-cart "></span>
                     </a>
                  </li>
                  <li><a href="SETTINGS.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                  <?php } ?>
                  
               </ul>
            </div>
         </div>
      </div>
<?php
                     
include 'login.php';
                     ?>

     
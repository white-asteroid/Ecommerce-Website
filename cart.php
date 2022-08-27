<?php
include 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:products.php');
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
      <style>
         footer
         {
         margin-top:17.5%;
         }
         tr,td,th{
             border: 1px solid black;
             text-align: center;
             padding: 10px;
         }
         thead{
             border: 1px solid black;
             border-bottom: 3px solid black;
             
         }
      </style>
   </head>
   <body>
      <?php 
      include 'includes\header.php';
      
      $user_id=$_SESSION['user_id'];
      $query="SELECT user_items.item_id,products.price FROM `user_items` JOIN products ON user_items.item_id=products.item_id WHERE user_items.user_id=$user_id" or die(mysqli_error($con));
      $sqc= mysqli_query($con, $query) or die(mysqli_error($con));
      $cr= mysqli_num_rows($sqc);
      
      
      
      ?>
       <div class="container" style="margin-top: 5% ">
           <?php 
                   if($cr)
                    {
       
                   ?>
           
           <div class="row" style="margin-top:50px;">
               <table class="col-xs-offset-3 col-xs-6 table-hover table-responsive bg-info" >
                   <thead class="text-primary bg-success">
                           <tr>
                               <th>Product id</th>
                               
                               <th>Price</th>
                               
                               
                           </tr>
                       </thead>
                      
                       <tbody>
                     
                       <?php
                            while($sr= mysqli_fetch_array($sqc))
                            {
                           
                       $id = $sr["item_id"].",";
                       //$_SESSION['id1']= $sr['item_id'];
                                
                              //  $_SESSION['id']=$sr['item_id'];
                       ?>
                       <tr>
                           <td><?php echo $sr['item_id'];?></td>
                           
                           <td><?php echo "₹".$sr['price'];?></td>
                           
                           
                       </tr>
                            <?php } 
                            // $idt="";
                            //$id = rtrim($id, ",");
                            ?>
                       
                           <tr  class="text-capitalize text-success ">
                               <th>Total</th>
                               <th style="border-left: none">
                                   <?php 
                                   
                                   $su="SELECT SUM(price) FROM products JOIN user_items ON user_items.item_id=products.item_id WHERE user_items.user_id=$user_id";
                                   $suc= mysqli_query($con, $su) ; 
                                   $sum= mysqli_fetch_array($suc);
                                   echo $sum['SUM(price)'];
                                   ?>
                                   </th>
                                  
                           </tr>
                       </tbody>
               </table>
               
               <a href="success.php" class="btn btn-primary col-xs-offset-7 col-xs-1" style="margin-top: 10px;">Confirm</a>
               
           </div>
       </div>
       
       
                    <?php 
                    
                            }
                    else{
                    ?>
       <p class="text-center text-danger">Please ! Enter the items first in cart</p>
       <style>
           footer{
               left:0;
               right:0;
               bottom:0;
               position: absolute;
           }
       </style>
       <?php
       
                    }
                    
       include 'includes\footer.php'; ?>
   </body>
</html>

<?php
    include 'includes\common.php';
    include 'includes\check-if-added.php';
    if(!isset($_SESSION['email']))
    {
        header('location:mainphp.php');
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
        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Welcome to our E-buy Store!</h1>
                <p>We have the best Smart watches and accessories for you. No need to hunt around, we
                    have all in one place.
                </p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/1.png" alt="Camera" class="img-responsive" style="max-height: 130px; margin-top: 20px;" style="max-height: 150px; margin-top: 20px;"><br>
                        <div class="caption">
                            <strong>Fossil 4th Gen</strong>
                            <P>Price:₹14000.00</P>
                            <?php
                            
                                    if(check_if_added_tocart(1))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/2.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple watch series 3</strong>
                            <p>Price: ₹.23290.00</p>
                            <?php
                                 
                                    if(check_if_added_tocart(2))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/3.png" alt="Camera"  class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fossil Sport 43</strong>
                            <P>Price:10500.00</P>
                            <?php
                                 
                                    if(check_if_added_tocart(3))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/4.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Galaxy watch LTE</strong>
                            <P>Price:400000.00</P>
                            <?php
                                 
                                    if(check_if_added_tocart(4))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/5.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fitbit Versa 2</strong>
                            <P>Price:21000.00</P>
                            <?php
                                 
                                    if(check_if_added_tocart(5))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/6.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                             <strong>Huawei Watch GT 2 (46 mm)</strong>
                            <p>Price: ₹.17000.00</p>
                            <?php
                                 
                                    if(check_if_added_tocart(6))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/7.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Honor Magic Watch 2 </strong>
                            <p>Price: ₹. 17000.00 </p>
                            <?php
                                 
                                    if(check_if_added_tocart(7))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/8.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Huami Amazfit GTR 47 mm </strong>
                            <p>Price: ₹.11000.00 </p>
                            <?php
                                 
                                    if(check_if_added_tocart(8))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        
                        <img src="img/9.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                           <strong>HYT Soonow Green Black 49mm</strong>
                            <p>Price: ₹.9690000.00</p>
                            <?php
                                 
                                    if(check_if_added_tocart(9))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                        
                        
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/10.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fossil unisex strap</strong>
                            <P>Price:500.00</P>
                            <?php
                                 
                                    if(check_if_added_tocart(10))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                                
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/11.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple white strap</strong>
                            <P>Price:400.00</P>
                            <?php
                                 
                                    if(check_if_added_tocart(11))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/12.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple watch strap funky</strong>
                            <p>Price: ₹. 350.00 </p>
                            <?php
                                 
                                    if(check_if_added_tocart(12))
                                    { ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Add to cart</a>
                            <?php 
                                }
                                else
                                {
                                ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                                
                                ?>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <?php      include 'includes\footer.php';?>
    </body>
</html>
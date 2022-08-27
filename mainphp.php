<?php
    include 'includes\common.php';
    include 'includes\check-if-added.php';
    if(isset($_SESSION['email']))
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
                </p><br>
                <?php if(isset($_GET['msg']))
                { ?>
                <p class="text-danger text-center"> You are already registered </p>
                <?php } ?>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/1.png" alt="Camera" class="img-responsive" style="max-height: 130px; margin-top: 20px;" style="max-height: 150px; margin-top: 20px;"><br>
                        <div class="caption">
                            <strong>Fossil 4th Gen</strong>
                            <P>Price:₹14000.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/2.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple watch series 3</strong>
                            <p>Price: ₹.23290.00</p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/3.png" alt="Camera"  class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fossil Sport 43</strong>
                            <P>Price:10500.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/4.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Galaxy watch LTE</strong>
                            <P>Price:400000.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/5.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fitbit Versa 2</strong>
                            <P>Price:21000.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/6.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                             <strong>Huawei Watch GT 2 (46 mm)</strong>
                            <p>Price: ₹.17000.00</p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/7.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Honor Magic Watch 2 </strong>
                            <p>Price: ₹. 17000.00 </p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/8.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Huami Amazfit GTR 47 mm </strong>
                            <p>Price: ₹.11000.00 </p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        
                        <img src="img/9.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                           <strong>HYT Soonow Green Black 49mm</strong>
                            <p>Price: ₹.9690000.00</p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                        
                        
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/10.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Fossil unisex strap</strong>
                            <P>Price:500.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                                
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/11.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple white strap</strong>
                            <P>Price:400.00</P>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/12.png" alt="Camera" class="img-responsive" style="max-height: 150px; margin-top: 20px;">
                        <div class="caption">
                            <strong>Apple watch strap funky</strong>
                            <p>Price: ₹. 350.00 </p>
                            <a data-toggle="modal" data-target="#qbx" class="btn btn-primary btn-block">Order now!</a>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <?php      include 'includes\footer.php';?>
    </body>
</html>

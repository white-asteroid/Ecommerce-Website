<?php
    include 'includes\common.php';
   // include 'includes\check-if-added.php';
?>
<!DOCTYPE html>

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
        <div class="container" style="margin-top: 5%">
            <div class="row">
                <div class="col-xs-9" >
                    <h4>Live Support</h4>
                    <h6 style="border-bottom: 1px solid #00ffcc; border-top: 1px solid #00ffcc;padding: 10px;">24 hours | 7 days a week | 365 days a year Live technical support</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
                <div class="col-xs-2">
                    <img src="img/customer-service.svg" class="img-responsive" alt="Icon made by Monkik perfect from www.flaticon.com">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    <h3>Contact us</h3>
                    <form action="conq.php" method="post">
                        <div class="form-group">
                        <label class="label" for="name" style="color: #000">Name:</label>
                        <input type="text" id="name" name="name" class="form-control " required>
                        </div>
                        <div class="form-group">
                        <label class="label" for="email" style="color: #000">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                        <label class="label" for="msg" style="color: #000">Message:</label>
                        <textarea class="form-control" id="msg" name="msg" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                        
                        
                        
                    </form>
                    <?php
                        if(isset($_GET['suc']))
                        { ?>
                        <strong>Thanks for you feedback :)</strong>
                        <?php } ?>
                </div>
                <div class="col-xs-3 col-md-offset-1">
                    <h3>Company information:</h3>
                    <p>B-125 Laxmi Nagar, Delhi,India<br>110092<br>Phn :55555555<br>email : Shivigarg010@gmail.com
                        <br>Follow us on <a href="https://www.instagram.com" style="text-decoration: none">Instagram</a>,
                        <a href="https://www.facebook.com" style="text-decoration: none">Facebook</a>
                    </p>
                    
                </div>
            </div>
            
        </div>
            
        <?php
        include 'includes\footer.php';?>
        <div class="col-xs-12" style="background-color: #666666"><p style=" float:right;">Icon made by Monkik perfect from www.flaticon.com</p></div>
    </body>
</html>
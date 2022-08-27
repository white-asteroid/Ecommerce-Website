<?php
   // include 'includes\common.php';
   // include 'includes\check-if-added.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>E-buy</title>
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
        <div class="row">
        <div class="container" style="margin-top:80px"> 
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    
                    <div class="panel panel-default">
                        <div class='panel-heading panel-info'>
                            
                            <h4 class='text-info'>Who are we?</h4>
                            <p class="glyphicon glyphicon-question-sign" style="color: #6666ff; font-size: 150px;"></p>
                        </div>
                        <div class='panel-body'>
                            <p>E-buy company is the electronic commerce company founded by Mr.Shivam Garg. We select best products available in the market and then make it available for our users . We collect best quality and provide best . All we need is your trust in us .<br>
                                The electronic device we provide are certfied and <strong>100% original product </strong><br>
                                We deal with various MNCs and provide products that are not normally available in the country/Region <br>
                                We have branches in many countries like India , Nepal , United states , England ,Japan etc <br>
                                Our headquater is in India , Delhi
                            </p>
                        </div>
                    </div>   
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class='panel-heading panel-info'>
                            <h4 class='text-info'>For customers</h4>
                        </div>
                        <div class='panel-body'>
                            <p> you can buy our products as we are one of the most trusted online commercial website<br>
                        We will proviide you from the best products in the market and we don't compromise quality.<br>
                        You can contact our customer care in case you have any query or you need any kind of help/support<br>
                        <strong>We'll be there for you ! Always 24/7</strong>
                    </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class='panel-heading panel-info'>
                            <h4 class='text-info'>Opportunity for students</h4>
                        </div>
                    <div class='panel-body'>
                    <p class='text-info'>Instructions for internship program</p><br>
                    <p class="text-primary bg-info">Skills required</p>
                    <ul class='list-group' style='list-style-type: none'>
                        <li >HTML&CSS</li>
                        <li >PHP</li>
                        <li >SQL</li>
                    </ul>
                    </div>
                </div>
                
            </div>
                 
        </div>
        </div>
        </div>
        
        <?php      include 'includes\footer.php';?>
    </body>
</html>
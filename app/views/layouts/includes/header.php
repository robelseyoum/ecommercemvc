<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The GamingPlace</title>
        <!-- Bootstrap core CSS -->
<!--         <link href="/layouts/css/bootstrap2.css" rel="stylesheet">
 -->
        <link href="<?php echo URLROOT; ?>/css/bootstrap1.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo URLROOT; ?>/css/custom.css" rel="stylesheet">

<!--          <link href="/css/custom.css"  rel="stylesheet">
 -->

       <?php //echo APPROOT; ?> <br> <?php //echo URLROOT; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Custom styles for this template -->
        <script src="<?php echo URLROOT; ?>/js/bootstrap.js"></script>

       
    </head>

<body>  
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URLROOT; ?>/products/index.html">The GamingPlace</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo URLROOT; ?>/products/index.html">Home</a></li>
                        <li><a href="register.html">Create Account</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <button name="submit" type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/.nav-collapse -->
             </div>
        </div> <!--/.navbar role="navigation"> -->

        <div class="container">
            <div class="row">
                    
                    <div class="col-md-4">
                        
                    <!-- From here it will be included into sidebar -->

                        <?php require APPROOT.'/views/layouts/includes/sidebar.php'; ?>

                    <!-- Until here it will be included into sidebar -->

                    </div>


        <div class="col-md-8">
                <div class="panel panel-default">
                    
                    <div class="panel-heading panel-heading-green">
                        <h3 class="panel-title"> The Gaming Place</h3>
                    </div>

                    <div class="panel-body">  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rikar Enterprises, Inc: <?php echo $pagetitle; ?></title>

    <!-- Bootstrap -->
    <link href="stylesheets/screen.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--Google Web Fonts-->  

    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,900,700' rel='stylesheet' type='text/css'>

</head>
<body class="<?php echo $pageclass; ?>">
 	<div class="container-fluid">
    <div class="row">  

      <div class="col-sm-4">
        
        <a href="index.php" class="brand"><img src="img/logo.png" alt="" class="img-responsive"></a> 
      
      <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="products.php">Products and Services</a></li>
              <li><a href="location.php">Location</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="col-sm-8">
      <div class="jumbotron" id="banner">
        <h1 class="pagetitle text-right metal-gradient"><?php echo $pagetitle; ?></h1>
      </div>

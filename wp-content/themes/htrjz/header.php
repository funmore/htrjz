<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
    
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://localhost/wp-content/uploads/2016/06/icon.ico">


    <!-- Bootstrap core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet">
 -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--     <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
 -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--     <script src="js/ie-emulation-modes-warning.js"></script>
 -->
<title><?php bloginfo('name') ?></title>
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class()?>>

<div class="navbar-wrapper">
<div class="container">
<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>   
                <!-- 这是屏幕变小时导航的按钮：用于下拉出导航 -->
              </button>
              <img class="navbar-brand" src="http://localhost/wp-content/uploads/2016/06/icon.jpg" alt="软件评测中心"/>
              <a class="navbar-brand" href="#">航天自动控制研究所装备软件评测中心</a>
		</div>  <!-- navbar-header 结束 -->
    <div id="navbar" class="navbar-collapse collapse">
            <?php 
              $args=array(
                'theme_location'=>'primary'
              );
            ?>
            <?php wp_nav_menu($args);?>
    </div>

	</div>  <!-- .container 结束 -->
</nav>
</div>  <!-- .container end -->
</div>  <!-- .navbar-warpper end -->

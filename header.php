<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php echo (is_home() ? "INICIO":the_title()); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,700,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/img/uas_logo.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body role="document">
    
    <div class="row" id="liston-arriba">
      <div class="container">      
        <a href="?cat=10">Filosofía</a>
        <a href="?cat=11">Letras</a>
        <a href="?cat=12">Sociología</a>
        <a href="?cat=13">Periodismo</a>
        <a href="<?php bloginfo("url") ?>" class="pull-right" id="enlace-efyl"><?php bloginfo('name'); ?></a>
      </div><!-- /.container -->
    </div><!-- /.row -->

    <div class="row" id="header">
      <div class="container">
        <div class="col-xs-6 col-sm-6" id="logo_uas">
          <img src="<?php bloginfo("template_url") ?>/img/uas_logo.png">
        </div>
        <div class="col-xs-6 col-sm-6 pull-right" id="logo-consolidacion">
          <img src="<?php bloginfo("template_url") ?>/img/consolidacion_logo.png" class="pull-right">
        </div>      
      </div><!-- /.container -->
    </div><!-- /.row -->

    <div class="row" id="menu-contenedor">
      <nav class="navbar" role="navigation" id="menu">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                Menú
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <?php
              wp_nav_menu(array(
              'theme_location' => 'menu-top',
              'container' => false,
              'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'
              ));  
            ?>
            </div>
          </div>
        </nav><!-- /.nav -->
      </div><!-- /.container -->
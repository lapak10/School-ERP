<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  
  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Login :: Grape - Professional &amp; Flexible Admin Template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/jquery.jqplot.min.css"> <!-- jQuery jQplot css file -->
  <!-- end CSS-->
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo $base_url; ?>assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body id="top">

  <!-- Begin of #container -->
  <div id="container">

<?php echo $header;?>

    
<div class="fix-shadow-bottom-height"></div>
	
<?php echo $sidebar;?>
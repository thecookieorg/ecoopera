<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EcoOPERA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/animate-custom.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./css/fonts.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
		
		<!-- These ones are for reveal content onClick box on home page -->
		<link rel="stylesheet" href="./css/reveal.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="./js/reveal.js"></script>
		<!-- END -->
		
		<!-- This is for slide show on home page -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script>
			$(function() {
		
			$("#slideshow > div:gt(0)").hide();
	
			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(4000)
			    .next()
			    .fadeIn(4000)
			    .end()
			    .appendTo('#slideshow');
			},  6000);
			
			});
		</script>
		<link rel="stylesheet" href="./css/slideShow.css">
		<!-- END -->
		
		<link rel="stylesheet" href="./css/bootstrap-responsive.css">
        <!--<link rel="stylesheet" href="css/bootstrap-responsive.min.css">-->
        <link rel="stylesheet" href="./css/main.css">
		
		<!-- this stylesheet is for hover image effect -->
		<link rel="stylesheet" type="text/css" href="./css/homepage_hover/style1.css" />
		<link rel="stylesheet" type="text/css" href="./css/homepage_hover/style_common.css" />
		
		<script src='./js/vendor/jquery-1.10.2.js'></script>
		<script type='text/javascript' src='./js/menu_jquery.js'></script>
    </head>
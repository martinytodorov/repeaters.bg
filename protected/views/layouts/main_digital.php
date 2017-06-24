<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

    <!-- BOOTSTRAP -->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php echo Yii::app()->controller->getBaseUrl(); ?>/addons/bootstrap-3.2.0-dist/css/bootstrap.min.css">

    <!-- THE RESPONSIVE MEDIA ADJUSTMENTS -->
    <link rel="stylesheet" media="(max-width:767px)" href="<?php echo Yii::app()->controller->getBaseUrl(); ?>/css/phones.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZBagAzAUMrg1YpieOZbyUD1EzX1MTCCE&sensor=false"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl.'/images/favicon.ico'?>">
</head>

<body>

<div class="container" id="page">

	

	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->

<!-- SCRIPT ADDITIONS -->
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->controller->getBaseUrl(); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="<?php echo Yii::app()->controller->getBaseUrl(); ?>/addons/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo Yii::app()->controller->getBaseUrl(); ?>/addons/jquery-mousewheel-master/jquery.mousewheel.min.js"></script>

</body>
</html>

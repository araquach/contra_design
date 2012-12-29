<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contradesign.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	
	<?php //enable for Google Analytics - enter account number and domain
	/*
	$this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
			array('account'=>'**-*******-*','domainName'=>'template.com'));
	*/?>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/selectivisr-min.js "type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/modernizr.js "type="text/javascript"></script>
	


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
	<div id="header_bottom"></div>
	<div id="header_centre">	
		<div id="logo"></div> <!--#logo-->
	
	<nav id="mainmenu">
		<?php  if (strpos($_SERVER['REQUEST_URI'], Yii::app()->request->baseUrl) === 0):?>
		
		<?php echo'
		<ul>
			<li><a href="#Home">Home</a></li>
			<li><a href="#AboutContra">About</a></li>
			<li><a href="#AboutAdam">Profile</a></li>
			<li><a href="#WebDesign">Web Design</a></li>
			<li><a href="#SEO">SEO</a></li>
			<li><a href="#PrintDesign">Print Design</a></li>
			<li><a href="#Photography">Photography</a></li>
			<li><a href="#Contact">Contact</a></li>
		</ul>' ?>
		
		<?php else:?>
		
		<?php 
		  $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index', '#'=>'Home')),
				array('label'=>'About', 'url'=>array('/site/index', '#'=>'AboutContra')),
				array('label'=>'Profile', 'url'=>array('/site/index', '#'=>'AboutAdam')),
				array('label'=>'Web Design', 'url'=>array('/site/index', '#'=>'WebDesign')),
				array('label'=>'SEO', 'url'=>array('/site/index', '#'=>'SEO')),
				array('label'=>'Print Design', 'url'=>array('/site/index', '#'=>'PrintDesign')),
				array('label'=>'Photography', 'url'=>array('/site/index', '#'=>'Photography')),
				array('label'=>'Contact', 'url'=>array('/site/index', '#'=>'Contact')),
			),
		)); ?>
		
		<?php endif?>
		
		
	</nav><!-- mainmenu -->
	</div> <!--#header_centre-->
	</header><!-- header -->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?> <!--main content from views-->

	<div class="clear"></div>

	<footer>
	<div id="footer_centre">
		Copyright &copy; <?php echo date('Y'); ?> Contra Design
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div> <!--#footer_centre-->
	</footer><!-- footer -->

</div><!-- page -->

</body>
</html>

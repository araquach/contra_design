<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/unslider.min.js');
	Yii::app()->clientScript->registerScript('unslider', '$(function() {
	    $(".banner").unslider({
	    	speed: 500,               
	    	delay: 6000,               
	    	keys: true,               
	    	dots: true,               
	    	fluid: true,              
	    });
	});');
?>

<div id="home">

<div class="banner">
    <ul>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/main/home/doodle-communication.jpg" alt="" /></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/main/home/man-using-a-computer.jpg" alt="" /></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/main/home/social-media.jpg" alt="" /></li>
    </ul>
</div> <!--.banner-->

</div> <!--#home-->
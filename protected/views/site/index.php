<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/unslider.min.js');
	Yii::app()->clientScript->registerScript('unslider', '$(function() {
	    $(".banner").unslider();
	});');

?>

<div id="home">

<div class="banner">
    <ul>
        <li>This is a slide.</li>
        <li>This is another slide.</li>
        <li>This is a final slide.</li>
    </ul>
</div>

</div> <!--#home-->
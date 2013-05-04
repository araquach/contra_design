

<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php 
Yii::app()->clientScript->registerScriptFile('scripts/scrollto.js',CClientScript::POS_HEAD); 
Yii::app()->clientScript->registerScriptFile('scripts/nivo-slider/jquery.nivo.slider.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile('scripts/localscroll.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('localscroll',"$('#mainmenu').localScroll({duration:800});",CClientScript::POS_READY);
Yii::app()->clientScript->registerScript('slider',"$('#slider').nivoSlider({effect: 'fade','slow'});",CClientScript::POS_READY);
?>

<div id="home">
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
        <img src="images/test0.jpg" alt="" />
        <img src="images/test1.jpg" alt="" />
        <img src="images/test2.jpg" alt="" />
        <img src="images/test3.jpg" alt="" />
    </div>
</div>


<section id="web_design" class="section">
<a name="WebDesign" class="anchor"></a>
	<section class="info group">
		<section class="text odd">
			<h1 class="light">Weave your own web of creativity</h1>
			<p class="light">Loren Ipsdom fksdjfkds</p>
		</section> <!--.text-->
		<div class="visuals odd">
		
		</div> <!--.visuals-->
	</section> <!--.info group group-->
</section> <!--#web_design-->

<section id="seo" class="section">
<a name="SEO" class="anchor"></a>
	<section class="info group">
		<section class="text">
			<h1>The Mysterious &amp; Intriguing <br>World of S.E.O</h1>
			<p>Loren Ipsum etc ksdjhfskdjfh</p>
		</section> <!--.text-->
		<div class="visuals">
		
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#seo-->

<section id="web_applications" class="section">
<a name="WebApplications" class="anchor"></a>
	<section class="info group">
		<section class="text odd">
			<h1 class="light">All the magic happens <br>behind the scenes&hellip;</h1>
			<p class="light">Loren Ipsdom fksdjfkds</p>
		</section> <!--.text-->
		<div class="visuals odd">
		
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#web_applications-->

<section id="print_design" class="section">
<a name="PrintDesign" class="anchor"></a>
	<section class="info group">
		<section class="text">
			<h1 class="light">Who says <br>print is dead?</h1>
			<p class="light">Loren Ipsdom fksdjfkds</p>
		</section> <!--.text-->
		<div class="visuals">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/brain.png" width="421" height="397">
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#print_design-->

<section id="photography" class="section">
<a name="Photography" class="anchor"></a>
	<section class="info group">
		<section class="text odd">
			<h1>A picture speaks <br>a million words</h1>
			<p>Loren Ipsum etc ksdjhfskdjfh</p>
		</section> <!--.text-->
		<div class="visuals odd">
		
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#photography-->

<section id="about_adam" class="section">
<a name="AboutAdam" class="anchor"></a>
	<section class="info group">
	<section class="text">
			<h1 class="light">The brains <br>behind Contra</h1>
				<p class="light">Contra was created over a period of years by founder, Adam Carter, working on projects for his other businesses. </p>
				<p class="light">With marketing, photography, web &amp; print design fundamental in the growth of businesses along with Adams passion for art, design &amp; photography, Contra </p>
		</section> <!--.text-->
		<div class="visuals">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newspics/bed-volume.jpg" width="190" height="220">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newspics/bed-volume.jpg" width="190" height="220">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newspics/bed-volume.jpg" width="190" height="220">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/newspics/bed-volume.jpg" width="190" height="220">
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#about_adam-->

<section id="contact" class="section">
<a name="Contact" class="anchor"></a>
	<section class="info group">
		<section class="text odd">
			<h1>We won't bite&hellip; promise</h1>
			<p>Loren Ipsum etc ksdjhfskdjfh</p>
		</section> <!--.text-->
		<div class="visuals odd">
		
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#contact-->

</div> <!--#home-->
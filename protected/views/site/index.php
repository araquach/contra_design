

<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php 
Yii::app()->clientScript->registerScriptFile('scripts/scrollto.js',CClientScript::POS_HEAD); 
Yii::app()->clientScript->registerScriptFile('scripts/localscroll.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('localscroll',"$('#mainmenu').localScroll({duration:800});",CClientScript::POS_READY);

?>


<div id="home">
<a name="Home" class="anchor"></a>
<!--<section id="strapline" class="section">
	<section class="info group">
		<h1>Web and Print Design</h1>
	</section>
</section>--> <!--#strapline-->

<section id="about_contra" class="section">
<div id="about_contra_point" class="point"></div> <!--pointy top of box-->
<a name="AboutContra" class="anchor"></a>
	<section class="info group">
	<section class="text">
		<h1>See your ideas come to life&hellip;</h1>
		<p>Contra is an independent design studio geared towards making your creative vision take shape.<br>
		We create web &amp; print products that will make you stand out from the crowd.</p>
		<p>In this world of ever evolving technology and trends, it's vital you choose forward thinking partners to collaborate with on your projects. Our primary goal is to truly understand your brand &amp; help develop it to the next level.</p>
		<p>We use the latest tools and techniques to ensure consistent, extensible and future proof products in the shape of web design, print design and a variety of creative marketing mediums.</p>
		<?php echo CHtml::link('Find out more&hellip;',array('/site/page', 'view'=>'about')); ?>

	</section> <!--.text-->
	<div class="visuals">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about.jpg" width="400" height="450">
	</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#about_contra-->

<section id="web_design" class="section">
<div id="web_design_point" class="point"></div> <!--pointy top of box-->
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
<div id="seo_point" class="point"></div> <!--pointy top of box-->
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
<div id="web_applications_point" class="point"></div> <!--pointy top of box-->
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
<div id="print_design_point" class="point"></div> <!--pointy top of box-->
<a name="PrintDesign" class="anchor"></a>
	<section class="info group">
		<section class="text">
			<h1 class="light">Who says <br>print is dead?</h1>
			<p class="light">Loren Ipsdom fksdjfkds</p>
		</section> <!--.text-->
		<div class="visuals">
		
		</div> <!--.visuals-->
	</section> <!--.info group-->
</section> <!--#print_design-->

<section id="photography" class="section">
<div id="photography_point" class="point"></div> <!--pointy top of box-->
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
<div id="about_adam_point" class="point"></div> <!--pointy top of box-->
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
<div id="contact_point" class="point"></div> <!--pointy top of box-->
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
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
        ul#menu li {
        display:inline;
         background-color: Orange;
        }
</style>
</head>

<body background="blue.jpg">';
 
		echo '<div class="container" id="page">

	<div id="header">
        <center>
            <img src="http://directory.ucanews.com/uploads/images/1357896339.jpg"  height="450px" >
            </center>
           <!-- <h1 style="font-size:52px; " > MOP Chancery Certificate Storage System </h1>--!>
		<div id="logo">
       </div>
	</div><!-- header -->';

	//echo'<div id="mainmenu">';
              echo' <center><ul id="menu" >';
              echo '<h1 style="font-size:80px;>';
                $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Search', 'url'=>array('/site/page','view'=>'search')),
				
			),
		));
                echo '</h1>';
                echo '</ul></center>';
                //Mobile
               // echo '</div><!-- mainmenu -->';
                ?>

    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<center><h1 style="font-size:32px"><?php echo $content; ?></h1></center>

	<div class="clear"></div>
        </br>
        </br>
                <?php
              echo'  <div id="footer">
                  <center>
		<h1>Copyright &copy;';  echo date('Y'); echo' by Chancery Solutions<br/>
		All Rights Reserved.<br/>
                Powered by: Online Productions</h1>
		</center>
	</div><!-- footer -->';
                
		}  else {
                    

		?>
    
    
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

    <body>

<div class="container" id="page">

	<div id="header">
            <img src="http://directory.ucanews.com/uploads/images/1357896339.jpg" align="left" height="75px" >
		<div id="logo">
         <p align="right">     
		 <?php echo CHtml::encode(Yii::app()->name); ?></p></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Calendar', 'url'=>array('/site/page', 'view'=>'sample')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	
	<!-- Submenu -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Bap Godparents', 'url'=>array('/bapGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Baptismal', 'url'=>array('/baptismal/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Church', 'url'=>array('/church/index'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Conf Godparents', 'url'=>array('/confGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Confirmation', 'url'=>array('/confirmation/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Employee', 'url'=>array('/employee/index'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Mar Godparents', 'url'=>array('/marGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Marriage', 'url'=>array('/marriage/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Person', 'url'=>array('/person/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Position', 'url'=>array('/position/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Priest', 'url'=>array('/priest/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logs', 'url'=>array('/logs/index'),'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>

	<div class="clear"></div>
	
	<div id="footer">
<!--<<<<<<< HEAD -->
	<!-- Facebook plugin -->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
		<div class="fb-like" data-href="https://www.facebook.com/pages/Military-Ordinariate-of-the-Philippines/216457348378194?fref=ts" 
			data-width="100px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" style="float:left"></div><!---->
		<br/><br/><br/><br/>
		<center>
		Copyright &copy; <?php echo date('Y'); ?> by AKT Solutions..<br/>
		All Rights Reserved.<br/>
                Powered by: Online Production</br>
		<?php echo Yii::getVersion(); ?>
		</center>
	</div><!-- footer -->
<!--=======-->
		<!--<center>Copyright &copy; <?php echo date('Y'); ?> by Chancery Solutions<br/>
		All Rights Reserved.<br/>
                Powered by: Online Productions
		</center>
>>>>>>> fd3c4627078be718498c6265a163c2d6e451dbb2-->
        
</div><!-- page -->

</body>
</html>
<?php }?>


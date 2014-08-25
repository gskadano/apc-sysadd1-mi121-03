<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                   
                    <p align="right">     <?php echo CHtml::encode(Yii::app()->name); ?></p></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<!-- Submenu -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Bap Godparents', 'url'=>array('/bapGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Baptismal', 'url'=>array('/baptismal/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Church', 'url'=>array('/church/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Conf Godparents', 'url'=>array('/confGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Confirmation', 'url'=>array('/confirmation/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Employee', 'url'=>array('/employee/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Mar Godparents', 'url'=>array('/marGodparent/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Marriage', 'url'=>array('/marriage/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Person', 'url'=>array('/person/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Position', 'url'=>array('/position/index'),'visible'=>!Yii::app()->user->isGuest)
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
		Copyright &copy; <?php echo date('Y'); ?> by AKT Solutions..<br/>
		All Rights Reserved.<br/>
                Powered by: Online Production
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

<?php
/* @var $this BapgodparentController */
/* @var $model Bapgodparent */

$this->breadcrumbs=array(
	'Bapgodparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bapgodparent', 'url'=>array('index')),
	array('label'=>'Manage Bapgodparent', 'url'=>array('admin')),
);
?>

<h1>Create Bapgodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
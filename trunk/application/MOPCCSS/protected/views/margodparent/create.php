<?php
/* @var $this MargodparentController */
/* @var $model Margodparent */

$this->breadcrumbs=array(
	'Margodparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Margodparent', 'url'=>array('index')),
	array('label'=>'Manage Margodparent', 'url'=>array('admin')),
);
?>

<h1>Create Margodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
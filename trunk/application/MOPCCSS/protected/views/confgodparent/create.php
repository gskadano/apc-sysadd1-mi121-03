<?php
/* @var $this ConfgodparentController */
/* @var $model Confgodparent */

$this->breadcrumbs=array(
	'Confgodparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Confgodparent', 'url'=>array('index')),
	array('label'=>'Manage Confgodparent', 'url'=>array('admin')),
);
?>

<h1>Create Confgodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Confirmation Godparent', 'url'=>array('index')),
	array('label'=>'Create Confirmation Godparent', 'url'=>array('create')),
	array('label'=>'View Confirmation Godparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Confirmation Godparent', 'url'=>array('admin')),
);
?>

<h1>Update Confirmation Godparent </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
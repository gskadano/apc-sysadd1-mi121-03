<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */

$this->breadcrumbs=array(
	'Bap Godparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Godparents', 'url'=>array('index')),
	array('label'=>'Manage Godparents', 'url'=>array('admin')),
);
?>

<h1>Create BapGodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
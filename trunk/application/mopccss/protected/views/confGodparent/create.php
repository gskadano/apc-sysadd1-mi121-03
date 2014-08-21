<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Godparent', 'url'=>array('index')),
	array('label'=>'Manage Godparent', 'url'=>array('admin')),
);
?>

<h1>Create Confirmation Godparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
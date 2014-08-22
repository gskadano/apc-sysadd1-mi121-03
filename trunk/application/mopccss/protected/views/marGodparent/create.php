<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Marriage Godparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarriageGodparent', 'url'=>array('index')),
	array('label'=>'Manage Marriage Godparent', 'url'=>array('admin')),
);
?>

<h1>Create Marriage Godparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
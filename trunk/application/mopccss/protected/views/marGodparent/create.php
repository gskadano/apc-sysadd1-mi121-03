<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Mar Godparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarGodparent', 'url'=>array('index')),
	array('label'=>'Manage MarGodparent', 'url'=>array('admin')),
);
?>

<h1>Create MarGodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
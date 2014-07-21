<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */

$this->breadcrumbs=array(
	'Baptismals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Baptismal', 'url'=>array('index')),
	array('label'=>'Manage Baptismal', 'url'=>array('admin')),
);
?>

<h1>Create Baptismal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
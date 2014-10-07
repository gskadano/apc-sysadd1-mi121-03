<?php
/* @var $this PriestController */
/* @var $model Priest */

$this->breadcrumbs=array(
	'Priests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Priest', 'url'=>array('index')),
	array('label'=>'Manage Priest', 'url'=>array('admin')),
);
?>

<h1>Create Priest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
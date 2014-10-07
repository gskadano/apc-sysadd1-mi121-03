<?php
/* @var $this PriestController */
/* @var $model Priest */

$this->breadcrumbs=array(
	'Priests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Priest', 'url'=>array('index')),
	array('label'=>'Create Priest', 'url'=>array('create')),
	array('label'=>'View Priest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Priest', 'url'=>array('admin')),
);
?>

<h1>Update Priest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
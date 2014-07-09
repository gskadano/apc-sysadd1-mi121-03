<?php
/* @var $this BapgodparentController */
/* @var $model Bapgodparent */

$this->breadcrumbs=array(
	'Bapgodparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bapgodparent', 'url'=>array('index')),
	array('label'=>'Create Bapgodparent', 'url'=>array('create')),
	array('label'=>'Update Bapgodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bapgodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bapgodparent', 'url'=>array('admin')),
);
?>

<h1>View Bapgodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'baptismal_id',
		'person_id',
	),
)); ?>

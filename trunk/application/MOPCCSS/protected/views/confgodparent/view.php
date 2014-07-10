<?php
/* @var $this ConfgodparentController */
/* @var $model Confgodparent */

$this->breadcrumbs=array(
	'Confgodparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Confgodparent', 'url'=>array('index')),
	array('label'=>'Create Confgodparent', 'url'=>array('create')),
	array('label'=>'Update Confgodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Confgodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Confgodparent', 'url'=>array('admin')),
);
?>

<h1>View Confgodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'confirmation_id',
		'person_id',
	),
)); ?>

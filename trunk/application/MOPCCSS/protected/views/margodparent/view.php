<?php
/* @var $this MargodparentController */
/* @var $model Margodparent */

$this->breadcrumbs=array(
	'Margodparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Margodparent', 'url'=>array('index')),
	array('label'=>'Create Margodparent', 'url'=>array('create')),
	array('label'=>'Update Margodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Margodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Margodparent', 'url'=>array('admin')),
);
?>

<h1>View Margodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marriage_id',
		'person_id',
	),
)); ?>

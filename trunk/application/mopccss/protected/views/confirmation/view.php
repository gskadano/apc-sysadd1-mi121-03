<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Confirmation', 'url'=>array('index')),
	array('label'=>'Create Confirmation', 'url'=>array('create')),
	array('label'=>'Update Confirmation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Confirmation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>

<h1>View Confirmation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'conf_confDate',
		'conf_bapChurch',
		'conf_bapAdd',
		'conf_church',
		'conf_priest',
		'Employee_id',
		'person_id',
		'father_id',
		'mother_id',
	),
)); ?>

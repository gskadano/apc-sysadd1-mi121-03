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
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		/*'person_id',*/array('label'=>'Person', 'value'=>$model->person->FullName),
		/*'father_id',*/array('label'=>'Father', 'value'=>$model->father->FullName),
		/*'mother_id',*/array('label'=>'Mother', 'value'=>$model->mother->FullName),
	),
)); ?>

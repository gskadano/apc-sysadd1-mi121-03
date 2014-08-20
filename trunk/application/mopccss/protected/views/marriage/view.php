<?php
/* @var $this MarriageController */
/* @var $model Marriage */

$this->breadcrumbs=array(
	'Marriages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Marriage', 'url'=>array('index')),
	array('label'=>'Create Marriage', 'url'=>array('create')),
	array('label'=>'Update Marriage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Marriage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marriage', 'url'=>array('admin')),
);
?>

<h1>View Marriage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mar_marDate',
		'mar_priest',
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		/*'bride_id',*/array('label'=>'Bride Name', 'value'=>$model->bride->FullName),
		/*'groom_id',*/array('label'=>'Groom Name', 'value'=>$model->groom->FullName),
		/*'father_id',*/array('label'=>'Father', 'value'=>$model->father->FullName),
		/*'mother_id',*/array('label'=>'Mother', 'value'=>$model->mother->FullName),
	),
)); ?>

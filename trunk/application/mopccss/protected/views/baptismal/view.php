<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */

$this->breadcrumbs=array(
	'Baptismals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Baptismal', 'url'=>array('index')),
	array('label'=>'Create Baptismal', 'url'=>array('create')),
	array('label'=>'Update Baptismal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Baptismal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Baptismal', 'url'=>array('admin')),
);
?>

<h1>View Baptismal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bap_bapDate',
		'bap_priest',
		'bap_church',
		'bap_churchAdd',
		'Employee_id',
		'person_id',
		'father_id',
		'mother_id',
	),
)); ?>
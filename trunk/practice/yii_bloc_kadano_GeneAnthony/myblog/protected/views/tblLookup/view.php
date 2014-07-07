<?php
/* @var $this TblLookupController */
/* @var $model TblLookup */

$this->breadcrumbs=array(
	'Tbl Lookups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblLookup', 'url'=>array('index')),
	array('label'=>'Create TblLookup', 'url'=>array('create')),
	array('label'=>'Update TblLookup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblLookup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblLookup', 'url'=>array('admin')),
);
?>

<h1>View TblLookup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'type',
		'position',
	),
)); ?>

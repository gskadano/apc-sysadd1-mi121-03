<?php
/* @var $this TblTagController */
/* @var $model TblTag */

$this->breadcrumbs=array(
	'Tbl Tags'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblTag', 'url'=>array('index')),
	array('label'=>'Create TblTag', 'url'=>array('create')),
	array('label'=>'Update TblTag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblTag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblTag', 'url'=>array('admin')),
);
?>

<h1>View TblTag #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'frequency',
	),
)); ?>

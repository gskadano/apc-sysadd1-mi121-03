<?php
/* @var $this PriestController */
/* @var $model Priest */

$this->breadcrumbs=array(
	'Priests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Priest', 'url'=>array('index')),
	array('label'=>'Create Priest', 'url'=>array('create')),
	array('label'=>'Update Priest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Priest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Priest', 'url'=>array('admin')),
);
?>

<h1>View Priest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pfname',
		'plname',
		'pmname',
		'dateOfBirth',
		'placeOfBirth',
		'crasm_no',
		'exp_date',
		'pr_father',
		'pr_mother',
		'ordainedAsPriest',
		'placeOfOrdination',
		'ordainingBishop',
		/*'church_id',*/array('label'=>'Church', 'value'=>$model->church->ch_name),
	),
)); ?>

<?php
/* @var $this ChurchController */
/* @var $model Church */

$this->breadcrumbs=array(
	'Churches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Church', 'url'=>array('index')),
	array('label'=>'Create Church', 'url'=>array('create')),
	array('label'=>'Update Church', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Church', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Church', 'url'=>array('admin')),
);
?>

<h1>View Church #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ch_name',
		'ch_address',
		'ch_priest',
	),
)); ?>

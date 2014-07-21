<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */

$this->breadcrumbs=array(
	'Bap Godparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BapGodparent', 'url'=>array('index')),
	array('label'=>'Create BapGodparent', 'url'=>array('create')),
	array('label'=>'Update BapGodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BapGodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BapGodparent', 'url'=>array('admin')),
);
?>

<h1>View BapGodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'baptismal_id',
		'person_id',
	),
)); ?>

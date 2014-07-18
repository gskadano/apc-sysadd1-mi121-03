<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Mar Godparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MarGodparent', 'url'=>array('index')),
	array('label'=>'Create MarGodparent', 'url'=>array('create')),
	array('label'=>'Update MarGodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MarGodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarGodparent', 'url'=>array('admin')),
);
?>

<h1>View MarGodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marriage_id',
		'person_id',
	),
)); ?>

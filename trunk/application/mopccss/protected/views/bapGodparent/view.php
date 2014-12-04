<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */

$this->breadcrumbs=array(
	'Bap Godparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Godparents', 'url'=>array('index')),
	array('label'=>'Create Godparent', 'url'=>array('create')),
	array('label'=>'Update Godparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Godparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Godparent', 'url'=>array('admin')),
);
?>

<h1>View BapGodparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		/*'baptismal_id',*/array('label'=>'Baptismal', 'value'=>$model->baptismal->id),
		/*'person_id',*/array('label'=>'Godparent', 'value'=>$model->bap_godparentname),
	),
)); ?>

<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConfGodparent', 'url'=>array('index')),
	array('label'=>'Create ConfGodparent', 'url'=>array('create')),
	array('label'=>'Update ConfGodparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConfGodparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConfGodparent', 'url'=>array('admin')),
);
?>

<h1>View Confirmation of God Parent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        /*'confirmation_id',*/array('label'=>'Confirmation', 'value'=>$model->confirmation->id),
		/*'conf_godparentname',*/array('label'=>'Godparent', 'value'=>$model->conf_godparentname),
	),
)); ?>
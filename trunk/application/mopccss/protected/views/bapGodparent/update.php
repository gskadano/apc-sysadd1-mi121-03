<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */

$this->breadcrumbs=array(
	'Bap Godparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BapGodparent', 'url'=>array('index')),
	array('label'=>'Create BapGodparent', 'url'=>array('create')),
	array('label'=>'View BapGodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BapGodparent', 'url'=>array('admin')),
);
?>

<h1>Update BapGodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
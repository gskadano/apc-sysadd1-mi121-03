<?php
/* @var $this ConfgodparentController */
/* @var $model Confgodparent */

$this->breadcrumbs=array(
	'Confgodparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Confgodparent', 'url'=>array('index')),
	array('label'=>'Create Confgodparent', 'url'=>array('create')),
	array('label'=>'View Confgodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Confgodparent', 'url'=>array('admin')),
);
?>

<h1>Update Confgodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BapgodparentController */
/* @var $model Bapgodparent */

$this->breadcrumbs=array(
	'Bapgodparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bapgodparent', 'url'=>array('index')),
	array('label'=>'Create Bapgodparent', 'url'=>array('create')),
	array('label'=>'View Bapgodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bapgodparent', 'url'=>array('admin')),
);
?>

<h1>Update Bapgodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
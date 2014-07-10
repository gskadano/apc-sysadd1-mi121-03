<?php
/* @var $this MargodparentController */
/* @var $model Margodparent */

$this->breadcrumbs=array(
	'Margodparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Margodparent', 'url'=>array('index')),
	array('label'=>'Create Margodparent', 'url'=>array('create')),
	array('label'=>'View Margodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Margodparent', 'url'=>array('admin')),
);
?>

<h1>Update Margodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
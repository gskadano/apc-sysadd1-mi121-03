<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Mar Godparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarGodparent', 'url'=>array('index')),
	array('label'=>'Create MarGodparent', 'url'=>array('create')),
	array('label'=>'View MarGodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MarGodparent', 'url'=>array('admin')),
);
?>

<h1>Update MarGodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
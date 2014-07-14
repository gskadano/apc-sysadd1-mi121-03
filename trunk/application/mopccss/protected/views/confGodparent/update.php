<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConfGodparent', 'url'=>array('index')),
	array('label'=>'Create ConfGodparent', 'url'=>array('create')),
	array('label'=>'View ConfGodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ConfGodparent', 'url'=>array('admin')),
);
?>

<h1>Update ConfGodparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
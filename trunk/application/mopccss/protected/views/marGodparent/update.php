<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Marriage Godparents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List  Marriage Godparent', 'url'=>array('index')),
	array('label'=>'Create Marriage Godparent', 'url'=>array('create')),
	array('label'=>'View MarriageGodparent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Marriage Godparent', 'url'=>array('admin')),
);
?>

<h1>Update Marriage Godparent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
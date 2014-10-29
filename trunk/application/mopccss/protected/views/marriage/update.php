<?php
/* @var $this MarriageController */
/* @var $model Marriage */

$this->breadcrumbs=array(
	'Marriages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Marriage', 'url'=>array('index')),
	array('label'=>'Create Marriage', 'url'=>array('create')),
	array('label'=>'View Marriage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Marriage', 'url'=>array('admin')),
);
?>

<h1>Update Marriage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form1', array('model'=>$model)); ?>
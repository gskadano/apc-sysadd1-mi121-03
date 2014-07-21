<?php
/* @var $this ChurchController */
/* @var $model Church */

$this->breadcrumbs=array(
	'Churches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Church', 'url'=>array('index')),
	array('label'=>'Create Church', 'url'=>array('create')),
	array('label'=>'View Church', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Church', 'url'=>array('admin')),
);
?>

<h1>Update Church <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
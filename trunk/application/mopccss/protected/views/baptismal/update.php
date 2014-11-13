<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */

$this->breadcrumbs=array(
	'Baptismals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Baptismal', 'url'=>array('index')),
	array('label'=>'Create Baptismal', 'url'=>array('person/create')),
	array('label'=>'View Baptismal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Baptismal', 'url'=>array('admin')),
);
?>

<h1>Update Baptismal <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form1', array('model'=>$model)); ?>
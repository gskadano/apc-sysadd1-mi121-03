<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Confirmation', 'url'=>array('index')),
	array('label'=>'View Confirmation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>

<h1>Update Confirmation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form1', array('model'=>$model)); ?>
<?php
/* @var $this TblLookupController */
/* @var $model TblLookup */

$this->breadcrumbs=array(
	'Tbl Lookups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblLookup', 'url'=>array('index')),
	array('label'=>'Create TblLookup', 'url'=>array('create')),
	array('label'=>'View TblLookup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblLookup', 'url'=>array('admin')),
);
?>

<h1>Update TblLookup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
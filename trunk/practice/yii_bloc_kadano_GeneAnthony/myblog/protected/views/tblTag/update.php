<?php
/* @var $this TblTagController */
/* @var $model TblTag */

$this->breadcrumbs=array(
	'Tbl Tags'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblTag', 'url'=>array('index')),
	array('label'=>'Create TblTag', 'url'=>array('create')),
	array('label'=>'View TblTag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblTag', 'url'=>array('admin')),
);
?>

<h1>Update TblTag <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
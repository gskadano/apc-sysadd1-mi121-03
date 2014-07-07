<?php
/* @var $this TblTagController */
/* @var $model TblTag */

$this->breadcrumbs=array(
	'Tbl Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblTag', 'url'=>array('index')),
	array('label'=>'Manage TblTag', 'url'=>array('admin')),
);
?>

<h1>Create TblTag</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
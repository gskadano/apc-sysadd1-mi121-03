<?php
/* @var $this TblLookupController */
/* @var $model TblLookup */

$this->breadcrumbs=array(
	'Tbl Lookups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblLookup', 'url'=>array('index')),
	array('label'=>'Manage TblLookup', 'url'=>array('admin')),
);
?>

<h1>Create TblLookup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TblLookupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Lookups',
);

$this->menu=array(
	array('label'=>'Create TblLookup', 'url'=>array('create')),
	array('label'=>'Manage TblLookup', 'url'=>array('admin')),
);
?>

<h1>Tbl Lookups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

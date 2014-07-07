<?php
/* @var $this TblTagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Tags',
);

$this->menu=array(
	array('label'=>'Create TblTag', 'url'=>array('create')),
	array('label'=>'Manage TblTag', 'url'=>array('admin')),
);
?>

<h1>Tbl Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

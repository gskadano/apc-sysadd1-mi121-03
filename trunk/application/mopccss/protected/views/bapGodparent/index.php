<?php
/* @var $this BapGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bap Godparents',
);

$this->menu=array(
	array('label'=>'Create Godparent', 'url'=>array('create')),
	array('label'=>'Manage Godparents', 'url'=>array('admin')),
);
?>

<h1>Baptismal Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

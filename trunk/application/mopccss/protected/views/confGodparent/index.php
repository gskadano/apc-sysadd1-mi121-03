<?php
/* @var $this ConfGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conf Godparents',
);

$this->menu=array(
	array('label'=>'Create Godparent', 'url'=>array('create')),
	array('label'=>'Manage Godparent', 'url'=>array('admin')),
);
?>

<h1>Confirmation Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

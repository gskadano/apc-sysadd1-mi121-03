<?php
/* @var $this ConfGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conf Godparents',
);

$this->menu=array(
	array('label'=>'Create ConfGodparent', 'url'=>array('create')),
	array('label'=>'Manage ConfGodparent', 'url'=>array('admin')),
);
?>

<h1>Conf Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this MarGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mar Godparents',
);

$this->menu=array(
	array('label'=>'Create MarGodparent', 'url'=>array('create')),
	array('label'=>'Manage MarGodparent', 'url'=>array('admin')),
);
?>

<h1>Mar Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

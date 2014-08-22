<?php
/* @var $this MarGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marriage Godparents',
);

$this->menu=array(
	array('label'=>'Create  Marriage Godparent', 'url'=>array('create')),
	array('label'=>'Manage  Marriage Godparent', 'url'=>array('admin')),
);
?>

<h1>Marriage Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

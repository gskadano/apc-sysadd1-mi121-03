<?php
/* @var $this BapgodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bapgodparents',
);

$this->menu=array(
	array('label'=>'Create Bapgodparent', 'url'=>array('create')),
	array('label'=>'Manage Bapgodparent', 'url'=>array('admin')),
);
?>

<h1>Bapgodparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

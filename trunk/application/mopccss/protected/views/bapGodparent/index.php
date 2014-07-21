<?php
/* @var $this BapGodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bap Godparents',
);

$this->menu=array(
	array('label'=>'Create BapGodparent', 'url'=>array('create')),
	array('label'=>'Manage BapGodparent', 'url'=>array('admin')),
);
?>

<h1>Bap Godparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

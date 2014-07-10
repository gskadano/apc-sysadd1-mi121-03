<?php
/* @var $this ConfgodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Confgodparents',
);

$this->menu=array(
	array('label'=>'Create Confgodparent', 'url'=>array('create')),
	array('label'=>'Manage Confgodparent', 'url'=>array('admin')),
);
?>

<h1>Confgodparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

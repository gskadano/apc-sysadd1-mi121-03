<?php
/* @var $this MargodparentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Margodparents',
);

$this->menu=array(
	array('label'=>'Create Margodparent', 'url'=>array('create')),
	array('label'=>'Manage Margodparent', 'url'=>array('admin')),
);
?>

<h1>Margodparents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

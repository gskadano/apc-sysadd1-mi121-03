<?php
/* @var $this PriestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Priests',
);

$this->menu=array(
	array('label'=>'Create Priest', 'url'=>array('create')),
	array('label'=>'Manage Priest', 'url'=>array('admin')),
);
?>

<h1>Priests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

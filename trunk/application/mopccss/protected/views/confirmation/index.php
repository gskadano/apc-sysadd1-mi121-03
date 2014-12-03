<?php
/* @var $this ConfirmationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Confirmations',
);

$this->menu=array(
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>

<h1>Confirmations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('person_id', 'Employee_id', 'conf_church')
)); ?>

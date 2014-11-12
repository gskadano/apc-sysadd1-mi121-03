<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */

$this->breadcrumbs=array(
	'Baptismals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Baptismal', 'url'=>array('index')),
	array('label'=>'Create Baptismal', 'url'=>array('create')),
	array('label'=>'Update Baptismal', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Baptismal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Baptismal', 'url'=>array('admin')),
	array('label'=>'Create Godparent', 'url'=>array('bapGodparent/create', 'baptismal_id'=>$model->id)),
);
?>

<h1>Baptismal details of <?php echo $model->person->FullName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('label'=>'Name', 'value'=>$model->person->FullName),
        array('label'=>'Date Of Birth', 'value'=>$model->person->p_dateOfBirth),
        array('label'=>'Place Of Birth', 'value'=>$model->person->p_placeOfBirth),
        array('label'=>'Address', 'value'=>$model->person->p_address),
        array('label'=>'Gender', 'value'=>$model->person->p_gender),
        array('label'=>'Father', 'value'=>$model->person->p_father),
        array('label'=>'Mother', 'value'=>$model->person->p_mother),
		//'id',
		'bap_bapDate',
		'bap_priest',
		'bap_church',
		'bap_churchAdd',
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		///*'person_id',*/array('label'=>'Person', 'value'=>$model->person->FullName),
	),
)); ?>

<?php $en=BapGodparent::model()->findAll('baptismal_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<br>

<h1>Baptismal Godparents</h1>
<?php foreach ($en as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('BapGodparent/update', 'id'=>$row->id)); ?>

<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/delete.png" align="right"/>',
	'#',array('submit'=>array('bapGodparent/delete','id'=>$row->id),'confirm' => 'Are you sure you want to delete?')); ?>  

<?php $this->widget ('zii.widgets.CdetailView', array(
        'data'=>$row,
        'attributes'=>array(
			array('label'=>'God Parent', 'value'=>$row->person->FullName),
        ),
));
?>
<?php }} ?>
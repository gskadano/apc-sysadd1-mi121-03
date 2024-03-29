<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
       // 'Conf Godparents'=>array('index'),
	$model->id,
   
);

$this->menu=array(
	array('label'=>'List Confirmation', 'url'=>array('index')),
	array('label'=>'Update Personal Info', 'url'=>array('person/update', 'id'=>$model->person_id)),
	array('label'=>'Update Confirmation Info', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Confirmation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Confirmation', 'url'=>array('admin'),
		'linkOptions'=>array('onclick'=>"if('confirm'=>'Are you sure?')")),
	array('label'=>'Create Godparent', 'url'=>array('confGodparent/create', 'confirmation_id'=>$model->id)),
       // array('label'=>'Generate Report', 'url'=>array('confpdf', 'id'=>$model->id)),
       array('label'=>'Generate Report', 'url'=>array('pdf', 'id'=>$model->id)),
);
?>




<h1>Confirmation details of <?php echo $model->person->FullName; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array('id',
		array('label'=>'Name', 'value'=>$model->person->FullName),
                array('label'=>'Date of Birth', 'value'=>$model->person->p_dateOfBirth),
                array('label'=>'Place of Birth', 'value'=>$model->person->p_placeOfBirth),
                array('label'=>'Address', 'value'=>$model->person->p_address),
                array('label'=>'Gender', 'value'=>$model->person->p_gender),
                array('label'=>'Father', 'value'=>$model->person->p_father),
                array('label'=>'Mother', 'value'=>$model->person->p_mother),
		'conf_confDate',
		'conf_bapChurch',
		'conf_bapAdd',
		'conf_church',
		'conf_priest',
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		'conf_bkno',
		'conf_series',
		'conf_pageno',
		'conf_lineno',
		
	),
)); ?>

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		//'id',
//		'conf_confDate',
//		'conf_bapChurch',
//		'conf_bapAdd',
//		'conf_church',
//		'conf_priest',
//		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
//		/*'person_id',*///array('label'=>'Person', 'value'=>$model->person->FullName),
//              //  array('label'=>'Father', 'value'=>$model->person->p_father),
//              //  array('label'=>'Mother', 'value'=>$model->person->p_mother),
//	),
//)); ?>



<?php $en=ConfGodparent::model()->findAll('confirmation_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<br>
<h2><b>God Parent</b></h2>

<?php foreach ($en as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('ConfGodparent/update', 'id'=>$row->id)); ?>

<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/delete.png" align="right"/>',
	'#',array('submit'=>array('ConfGodparent/delete','id'=>$row->id),'confirm' => 'Are you sure you want to delete?')); ?>  



<?php $this->widget ('zii.widgets.CdetailView', array(
        'data'=>$row,
        'attributes'=>array(
			array('label'=>'God Parent', 'value'=>$row->conf_godparentname),
        ),
)); ?>

<?php }} ?>
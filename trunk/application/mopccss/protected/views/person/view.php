<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'People'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'Create Baptismal', 'url'=>array('baptismal/create', 'person_id'=>$model->id)),
	array('label'=>'Create Confirmation', 'url'=>array('confirmation/create', 'person_id'=>$model->id)),
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<!--<h1>View Person #<?php echo $model->id; ?></h1>-->
<h1><b><?php echo $model->FullName; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'p_fname',
		'p_middlename',
		'p_lname',
		'p_dateOfBirth',
		'p_placeOfBirth',
		'p_address',
		'p_dateOfDeath',
		'p_gender',
		'p_father',
		'p_mother',
	),
)); ?>

<?php $en=Position::model()->findAll('client_id=:a', array(':a'=>$model->id)); ?>

<?php if (count($en) !== 0){?>
<br>

<h1>Position</h1>
<?php foreach ($en as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('BapGodparent/update', 'id'=>$row->id)); ?>

<?php $this->widget ('zii.widgets.CdetailView', array(
        'data'=>$row,
        'attributes'=>array(
			//'id',
			'rank',
			'afpSerialNum',
			'branchOfService',
			'unitAddress',
        ),
));
?>
<?php }} ?>
<?php
/* @var $this MarriageController */
/* @var $model Marriage */

$this->breadcrumbs=array(
	'Marriages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Marriage', 'url'=>array('index')),
	array('label'=>'Create Marriage', 'url'=>array('create')),
	array('label'=>'Update Marriage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Marriage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marriage', 'url'=>array('admin')),
	array('label'=>'Create Godparent', 'url'=>array('marGodparent/create', 'marriage_id'=>$model->id)),
);
?>


<h1>View Marriage #<?php echo $model->id; ?></h1>
<h4>Bride</h4>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(

		array('label'=>'Bride Name', 'value'=>$model->bride->FullName),
		array('label'=>'Birthday', 'value'=>$model->bride->p_dateOfBirth),
		array('label'=>'Birth Place', 'value'=>$model->bride->p_placeOfBirth),
		array('label'=>'Address', 'value'=>$model->bride->p_address),
		array('label'=>'Gender', 'value'=>$model->bride->p_gender),
		array('label'=>'Father', 'value'=>$model->bride->p_father),
		array('label'=>'Mother', 'value'=>$model->bride->p_mother),

		

	),
)); ?>
<br>
<h4>Groom</h4>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('label'=>'Groom Name', 'value'=>$model->groom->FullName),
		array('label'=>'Birthday', 'value'=>$model->groom->p_dateOfBirth),
		array('label'=>'Birth Place', 'value'=>$model->groom->p_placeOfBirth),
		array('label'=>'Address', 'value'=>$model->groom->p_address),
		array('label'=>'Gender', 'value'=>$model->groom->p_gender),
		array('label'=>'Father', 'value'=>$model->groom->p_father),
		array('label'=>'Mother', 'value'=>$model->groom->p_mother),
	),
)); ?>
<br>
<h4>Marriage Details</h4>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		array('label'=>'Church', 'value'=>$model->employee->church->ch_name),
		'mar_marDate',
		'mar_priest',
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		///*'bride_id',*/array('label'=>'Bride Name', 'value'=>$model->bride->FullName),
		///*'groom_id',*/array('label'=>'Groom Name', 'value'=>$model->groom->FullName),
		///*'father_id',*/array('label'=>'Father', 'value'=>$model->father->FullName),
		///*'mother_id',*/array('label'=>'Mother', 'value'=>$model->mother->FullName),
	),
)); ?>

<?php $en=MarGodparent::model()->findAll('marriage_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<br>
<h4>Marriage Godparent</h4>
<?php foreach ($en as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('marGodparent/update', 'id'=>$row->id)); ?>
<?php $this->widget ('zii.widgets.CdetailView', array(
        'data'=>$row,
        'attributes'=>array(
            array('label'=>'Godparent', 'value'=>$row->person->FullName),
        ),
));
?>
<?php }} ?>
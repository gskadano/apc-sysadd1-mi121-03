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
);
?>

<h1>View Marriage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mar_marDate',
		'mar_priest',
		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
		/*'bride_id',*/array('label'=>'Bride Name', 'value'=>$model->bride->FullName),
		/*'groom_id',*/array('label'=>'Groom Name', 'value'=>$model->groom->FullName),
	),
)); ?><?php $marriage_id= $model->id;?>

<?php $marriage= MarGodparent::model()->findAll('id = :a', array(':a'=>$model->id));?>
<?php if (count($conf) !== 0){?>
<br>
<h2>Marriage Godparent</h2>
<?php foreach ($conf as $row) { ?>

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$row,
        'attributes'=>array('id',
		//array('label'=>'Marriage id', 'value'=>$model->marriage->id),
		'marriage_id',
		array('label'=>'Person', 'value'=>$model->person->FullName),
		//'person_id',
	),
)); ?>
<br>
<?php }} ?>
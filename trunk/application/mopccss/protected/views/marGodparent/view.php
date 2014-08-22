<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */

$this->breadcrumbs=array(
	'Marriage Godparents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List  Marriage Godparent', 'url'=>array('index')),
	array('label'=>'Create MarriageGodparent', 'url'=>array('create')),
	array('label'=>'Update Marriage Godparent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Marriage Godparent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marriage Godparent', 'url'=>array('admin')),
);
?>

<h1>View Marriage Godparent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marriage_id',
		//'person_id',
                array('label'=>'Person Name', 'value'=>$model->person->FullName)
	),
)); ?>

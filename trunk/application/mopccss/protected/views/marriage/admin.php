<?php
/* @var $this MarriageController */
/* @var $model Marriage */

$this->breadcrumbs=array(
	'Marriages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Marriage', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#marriage-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Marriages</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'marriage-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'mar_marDate',
		'mar_priest',
		/*
		'Employee_id',
		'bride_id',
		'groom_id',
		*/
		array('name'=>'Employee_id','header'=>'Employee', 'value'=>'$data->employee->FullName'),
		array('name'=>'bride_id', 'header'=>'Bride Full Name', 'value'=>'$data->bride->FullName'),
		array('name'=>'groom_id', 'header'=>'Groom Full Name', 'value'=>'$data->groom->FullName'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

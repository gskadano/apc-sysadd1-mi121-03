<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */

$this->breadcrumbs=array(
	'Baptismals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Baptismal', 'url'=>array('index')),
	//array('label'=>'Create Baptismal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#baptismal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Baptismals</h1>

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
	'id'=>'baptismal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'bap_bapDate',
		'bap_priest',
		'bap_church',
		'bap_churchAdd',
		/*
		'Employee_id',
		'person_id',
		'father_id',
		'mother_id',
		*/
		array('name'=>'Employee_id', 'header'=>'Employee', 'value'=>'$data->employee->FullName'),
		array('name'=>'person_id', 'header'=>'Person Full Name', 'value'=>'$data->person->FullName'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

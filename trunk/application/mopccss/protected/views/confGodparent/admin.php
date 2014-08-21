<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Godparent', 'url'=>array('index')),
	array('label'=>'Create Godparent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conf-godparent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Confirmation Godparents</h1>

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
	'id'=>'conf-godparent-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		
		array('name'=>'confirmation_id', 'header'=>'Confirmation', 'value'=>'$data->confirmation->id'),
		array('name'=>'person_id', 'header'=>'Godparent', 'value'=>'$data->person->FullName'),
		//'confirmation_id',
		
		//'person_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

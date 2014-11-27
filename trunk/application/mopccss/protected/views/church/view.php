<?php
/* @var $this ChurchController */
/* @var $model Church */

$this->breadcrumbs=array(
	'Churches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Church', 'url'=>array('index')),
	array('label'=>'Create Church', 'url'=>array('create')),
	array('label'=>'Update Church', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Church', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Church', 'url'=>array('admin')),
);
?>

<h1>View Church #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	//'data'=>$modelID,
	'attributes'=>array(
		'id',
		'ch_name',
		'ch_address',
             array(
	                'name'=>'PictureChurch',
	                'type'=>'raw',
	                'value'=>html_entity_decode(CHtml::image(Yii::app()->controller->createUrl('church/loadImage', array('id'=>$model->id))
	                                                                                ,'alt'
	                                                                                ,array('width'=>300)
	                                                                                )),
	                ),
	),
)); ?>
<?php
  /*$this->widget('CMultiFileUpload', array(
     'model'=>$model,
     'attribute'=>'files',
     'accept'=>'jpg|gif',
     'options'=>array(
        'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
        'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
        'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
        'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
        'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
        'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
     ),
  ));*/
?>
<!------------------------------------------------------------------------------------------------------------------------------------>
<br/><h2>Other Information</h2>
<?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'Employees'=>array('content'=>$this->renderPartial('_employee',
                                        array('modelID'=>$model->id),TRUE
                                        )),        
        'Priests'=>array('content'=>$this->renderPartial('_priest',
                                        array('modelID'=>$model->id),TRUE
                                        )),
		//'Dynamic Tab'=>array('ajax'=>$this->createAbsoluteUrl('baptismal/index')),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        //'collapsible'=>true,
		'event'=>'mouseover',
    ),
    'id'=>'MyTab-Menu',
));
?>
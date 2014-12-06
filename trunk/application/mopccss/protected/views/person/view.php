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
	array('label'=>'Update Person', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);

$this->cert=array(
	array('label'=>'Create Baptismal', 'url'=>array('baptismal/create', 'person_id'=>$model->id)),
	array('label'=>'Create Confirmation', 'url'=>array('confirmation/create', 'person_id'=>$model->id)),
	array('label'=>'Create marriage', 'url'=>'#', 'linkOptions'=>array('onclick'=>'$("#mydialog").dialog("open"); return false;')),
);

$this->certlist=array(
	array('label'=>'Get Certificates', 'url'=>'#', 'linkOptions'=>array('onclick'=>'$("#getcertficate").dialog("open"); return false;')),
);
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui/jquery-ui.css" />
<?php
//Baptismal ID
$sql=Baptismal::model()->findAll('person_id=:parent_id',array(':parent_id'=>$model->id));
$data=CHtml::listData($sql,'id','id');
foreach($data as $value=>$name)
{
	$bapID = $value;
}
//Confirmation ID
$sql=Confirmation::model()->findAll('person_id=:parent_id',array(':parent_id'=>$model->id));
$data=CHtml::listData($sql,'id','id');
foreach($data as $value=>$name)
{
	$confID = $value;
}
//Marriage ID
$sql=Marriage::model()->findAll('bride_id=:bride OR groom_id=:groom',array(':bride'=>$model->id, ':groom'=>$model->id));
$data=CHtml::listData($sql,'id','id');
foreach($data as $value=>$name)
{
	$marID = $value;
}

$bapsql=Baptismal::model()->findAll('person_id=:parent_id',array(':parent_id'=>$model->id));
$confsql=Confirmation::model()->findAll('person_id=:parent_id',array(':parent_id'=>$model->id));
$marsql=Marriage::model()->findAll('bride_id=:bride OR groom_id=:groom',array(':bride'=>$model->id, ':groom'=>$model->id));

if(count($bapsql)==0&&count($confsql)==0&&count($marsql)==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
		),
	));
	echo "No available certificates";
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)!==0&&count($confsql)==0&&count($marsql)==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Baptismal Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('baptismal/view',array('id'=>$bapID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)!==0&&count($confsql)!==0&&count($marsql)==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Baptismal Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('baptismal/view',array('id'=>$bapID)).'"}'),
				array('text'=>'Confirmation Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('confirmation/view',array('id'=>$confID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)!==0&&count($confsql)!==0&&count($marsql)!==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Baptismal Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('baptismal/view',array('id'=>$bapID)).'"}'),
				array('text'=>'Confirmation Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('confirmation/view',array('id'=>$confID)).'"}'),
				array('text'=>'Marriage Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('marriage/view',array('id'=>$marID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)==0&&count($confsql)!==0&&count($marsql)==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Confirmation Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('confirmation/view',array('id'=>$confID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)==0&&count($confsql)!==0&&count($marsql)!==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Confirmation Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('confirmation/view',array('id'=>$confID)).'"}'),
				array('text'=>'Marriage Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('marriage/view',array('id'=>$marID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)!==0&&count($confsql)==0&&count($marsql)!==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Baptismal Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('baptismal/view',array('id'=>$bapID)).'"}'),
				array('text'=>'Marriage Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('marriage/view',array('id'=>$marID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if(count($bapsql)==0&&count($confsql)==0&&count($marsql)!==0){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'getcertficate',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Certificates Available',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Marriage Certificate','click'=> 'js:function(){window.location = "'
					.$this->createUrl('marriage/view',array('id'=>$marID)).'"}'),
			),
		),
	));
	$this->endWidget('zii.widgets.jui.CJuiDialog');
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui/jquery-ui.css" />
<?php
if($model->p_gender=="Female"){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'mydialog',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Create partner','click'=> 'js:function(){window.location = "'.$this->createUrl('create').'"}'),
				array('text'=>'Create certificate','click'=> 'js:function(){
					window.location = "'.$this->createUrl('marriage/create', array('bride_id'=>$model->id)).'"}'),
			),
		),
	));
	
	echo 'Create marriage certificate or add groom?';

	$this->endWidget('zii.widgets.jui.CJuiDialog');
}else if($model->p_gender=="Male"){
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
		'id'=>'mydialog',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'',
			'autoOpen'=>false,
			'buttons' => array(
				array('text'=>'Create partner','click'=> 'js:function(){window.location = "'.$this->createUrl('create').'"}'),
				array('text'=>'Create certificate','click'=> 'js:function(){
					window.location = "'.$this->createUrl('marriage/create', array('groom_id'=>$model->id)).'"}'),
			),
		),
	));
	
	echo 'Create marriage certificate or add bride?';

	$this->endWidget('zii.widgets.jui.CJuiDialog');
}
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
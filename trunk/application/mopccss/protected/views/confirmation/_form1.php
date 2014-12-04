<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'confirmation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_confDate'); ?>
		<!--<?php echo $form->textField($model,'conf_confDate'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model, 'attribute'=>'conf_confDate',
        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-10:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
        ),
		)); ?>
		<?php echo $form->error($model,'conf_confDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_bapChurch'); ?>
		<?php echo $form->textField($model,'conf_bapChurch',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'conf_bapChurch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_bapAdd'); ?>
		<?php echo $form->textField($model,'conf_bapAdd',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'conf_bapAdd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_church'); ?>
		<!--<?php echo $form->textField($model,'conf_church',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model,'conf_church',CHtml::listData(Church::model()->findAll(), 'ch_name', 'ch_name'),
                        array('empty' => 'Select Church',
                        'ajax'=>array('size'=>50,
                        //'type='=>'POST',
                        'type='=>'GET',
                        'url'=>CController::createUrl('Baptismal/Church'),
                        //'update'=>'#'.CHtml::activeId($model, 'bap_churchAdd'),
						//'update'=>'#bap_churchAdd',
                        'data'=>array('bap_church'=>'js:this.value'),
						//'success'=>'function(data){ $("#.CHtml::activeId($model, bap_churchAdd)").attr("value",data); }'
						//-->'success'=>'function(data){ $("#bap_churchAdd").attr("value",data); }'
                ))); ?>
				
		<!--<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'conf_church',
			'data'=>CHtml::listData(Church::model()->findAll(), 'ch_name', 'ch_name'),
		)); ?>-->
		<?php echo $form->error($model,'conf_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_priest'); ?>
		<!--<?php echo $form->textField($model,'conf_priest',array('size'=>45,'maxlength'=>45)); ?>-->
		<!--<?php echo $form->dropDownList($model, 'conf_priest', CHtml::listData(
			Priest::model()->findAll(), 'pfname', 'PFullName'),
			array('prompt' => 'Select a priest')
			); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
			'model'=>$model,
			'attribute'=>'conf_priest',
			'name'=>'ajaxrequest',
			// additional javascript options for the autocomplete plugin
			'options'=>array(
				'minLength'=>'1',
			),
			'source'=>$this->createUrl("Confirmation/Ajax"),
			'htmlOptions'=>array(
				'style'=>'height:20px;',
			),
		));
		?>
		<?php echo $form->error($model,'conf_priest'); ?>
	</div>

	<div class="row">
	<?php 
		$criteria = new CDbCriteria();
		$criteria->select = 'id';
		$criteria->condition = 'emp_username=:name';
		$criteria->params = array(':name'=>Yii::app()->user->name);
		?>
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll('emp_username = :a', array(':a'=>Yii::app()->user->name)), 'id', 'FullName')); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'person_id'); ?>-->
		<!--<?php echo $form->textField($model,'person_id'); ?>-->
		<!--<?php echo $form->dropDownList($model, 'person_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select a person')
			); ?>-->
		<?php echo $form->hiddenField($model, 'person_id'); ?>
		<!--<?php echo $form->error($model,'person_id'); ?>-->
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'conf_bkno'); ?>
		<?php echo $form->textField($model,'conf_bkno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'conf_bkno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_series'); ?>
		<?php echo $form->textField($model,'conf_series',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'conf_series'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'conf_pageno'); ?>
		<?php echo $form->textField($model,'conf_pageno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'conf_pageno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_lineno'); ?>
		<?php echo $form->textField($model,'conf_lineno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'conf_lineno'); ?>
	</div>

        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
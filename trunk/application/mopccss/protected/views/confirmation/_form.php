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
		<?php echo $form->dropDownList($model, 'conf_church', CHtml::listData(
			Church::model()->findAll(), 'ch_name', 'ch_name'),
			array('prompt' => 'Select a church')
			); ?>
		<?php echo $form->error($model,'conf_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_priest'); ?>
		<!--<?php echo $form->textField($model,'conf_priest',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model, 'conf_priest', CHtml::listData(
			Priest::model()->findAll(), 'pfname', 'PFullName'),
			array('prompt' => 'Select a priest')
			); ?>
		<?php echo $form->error($model,'conf_priest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select an Employee')
			); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<!--<?php echo $form->textField($model,'person_id'); ?>-->
		<?php echo $form->dropDownList($model, 'person_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select a person')
			); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>
        
        <H2>God Parent</H2>
	<div class="row">
		<!--<?php echo $form->labelEx($confgodparent,'confirmation_id'); ?>-->
		<!--<?php echo $form->textField($confgodparent,'confirmation_id'); ?>-->
		
		<?php echo $form->hiddenField($confgodparent,'confirmation_id'); ?>
		
		<!--<?php echo $form->dropDownList($confgodparent, 'confirmation_id', CHtml::listData(
			Confirmation::model()->findAll(), 'id', 'id'),//dapat name ng bibinyagan
			array('prompt' => 'Select confirmation')
			); ?>-->
		
		<!--<?php echo $form->error($confgodparent,'confirmation_id'); ?>-->
	</div>

	<div class="row">
		<?php echo $form->labelEx($confgodparent,'person_id'); ?>
		<!--<?php echo $form->textField($confgodparent,'person_id'); ?>-->
		<?php echo $form->dropDownList($confgodparent, 'person_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select Godparents')
			); ?>
		<?php echo $form->error($confgodparent,'person_id'); ?>
	</div>
	

        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
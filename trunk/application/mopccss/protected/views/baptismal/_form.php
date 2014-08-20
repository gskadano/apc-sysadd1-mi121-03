<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'baptismal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_bapDate'); ?>
		<!--php echo $form->textField($model,'bap_bapDate'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model, 'attribute'=>'bap_bapDate',
        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-10:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
        ),
		)); ?>
		<?php echo $form->error($model,'bap_bapDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_priest'); ?>
		<!--<?php echo $form->textField($model,'bap_priest',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model, 'bap_priest', CHtml::listData(
			Church::model()->findAll(), 'ch_priest', 'ch_priest'),
			array('prompt' => 'Select a Priest')
			); ?>
		<?php echo $form->error($model,'bap_priest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_church'); ?>
		<!--<?php echo $form->textField($model,'bap_church',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model, 'bap_church', CHtml::listData(
			Church::model()->findAll(), 'ch_name', 'ch_name'),
			array('prompt' => 'Select a Church')
			); ?>
		<?php echo $form->error($model,'bap_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_churchAdd'); ?>
		<!--<?php echo $form->textField($model,'bap_churchAdd',array('size'=>60,'maxlength'=>100)); ?>-->
		<?php echo $form->dropDownList($model, 'bap_churchAdd', CHtml::listData(
			Church::model()->findAll(), 'ch_address', 'ch_address'),
			array('prompt' => 'Select a Church Address')
			); ?>
		<?php echo $form->error($model,'bap_churchAdd'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'father_id'); ?>
		<!--<?php echo $form->textField($model,'father_id'); ?>-->
		<?php echo $form->dropDownList($model, 'father_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select the father')
			); ?>
		<?php echo $form->error($model,'father_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother_id'); ?>
		<!--<?php echo $form->textField($model,'mother_id'); ?>-->
		<?php echo $form->dropDownList($model, 'mother_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select the mother')
			); ?>
		<?php echo $form->error($model,'mother_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
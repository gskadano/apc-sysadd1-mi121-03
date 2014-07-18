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
		<?php echo $form->textField($model,'conf_confDate'); ?>
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
		<?php echo $form->textField($model,'conf_church',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'conf_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_priest'); ?>
		<?php echo $form->textField($model,'conf_priest',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'conf_priest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<?php echo $form->textField($model,'Employee_id'); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_id'); ?>
		<?php echo $form->textField($model,'father_id'); ?>
		<?php echo $form->error($model,'father_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother_id'); ?>
		<?php echo $form->textField($model,'mother_id'); ?>
		<?php echo $form->error($model,'mother_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
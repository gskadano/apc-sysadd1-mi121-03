<?php
/* @var $this MarriageController */
/* @var $model Marriage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marriage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mar_marDate'); ?>
		<?php echo $form->textField($model,'mar_marDate'); ?>
		<?php echo $form->error($model,'mar_marDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mar_priest'); ?>
		<?php echo $form->textField($model,'mar_priest',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mar_priest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<?php echo $form->textField($model,'Employee_id'); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bride_id'); ?>
		<?php echo $form->textField($model,'bride_id'); ?>
		<?php echo $form->error($model,'bride_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groom_id'); ?>
		<?php echo $form->textField($model,'groom_id'); ?>
		<?php echo $form->error($model,'groom_id'); ?>
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
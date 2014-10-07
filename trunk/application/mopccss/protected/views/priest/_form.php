<?php
/* @var $this PriestController */
/* @var $model Priest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'priest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pfname'); ?>
		<?php echo $form->textField($model,'pfname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pfname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plname'); ?>
		<?php echo $form->textField($model,'plname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'plname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'church_id'); ?>
		<!--<?php echo $form->textField($model,'church_id'); ?>-->
		<?php echo $form->dropDownList($model, 'church_id', CHtml::listData(
			Church::model()->findAll(), 'id', 'ch_name'),
			array('prompt' => 'Select church')
			); ?>
		<?php echo $form->error($model,'church_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
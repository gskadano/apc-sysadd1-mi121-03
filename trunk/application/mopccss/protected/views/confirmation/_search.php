<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_confDate'); ?>
		<?php echo $form->textField($model,'conf_confDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_bapChurch'); ?>
		<?php echo $form->textField($model,'conf_bapChurch',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_bapAdd'); ?>
		<?php echo $form->textField($model,'conf_bapAdd',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_church'); ?>
		<?php echo $form->textField($model,'conf_church',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conf_priest'); ?>
		<?php echo $form->textField($model,'conf_priest',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Employee_id'); ?>
		<?php echo $form->textField($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'father_id'); ?>
		<?php echo $form->textField($model,'father_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mother_id'); ?>
		<?php echo $form->textField($model,'mother_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
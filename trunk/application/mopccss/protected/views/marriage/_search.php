<?php
/* @var $this MarriageController */
/* @var $model Marriage */
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
		<?php echo $form->label($model,'mar_marDate'); ?>
		<?php echo $form->textField($model,'mar_marDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mar_priest'); ?>
		<?php echo $form->textField($model,'mar_priest',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Employee_id'); ?>
		<?php echo $form->textField($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bride_id'); ?>
		<?php echo $form->textField($model,'bride_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'groom_id'); ?>
		<?php echo $form->textField($model,'groom_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
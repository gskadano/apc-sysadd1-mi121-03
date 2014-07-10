<?php
/* @var $this PersonController */
/* @var $model Person */
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
		<?php echo $form->label($model,'p_fname'); ?>
		<?php echo $form->textField($model,'p_fname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_middlename'); ?>
		<?php echo $form->textField($model,'p_middlename',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_lname'); ?>
		<?php echo $form->textField($model,'p_lname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_dateOfBirth'); ?>
		<?php echo $form->textField($model,'p_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_placeOfBirth'); ?>
		<?php echo $form->textField($model,'p_placeOfBirth',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_address'); ?>
		<?php echo $form->textField($model,'p_address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_dateOfDeath'); ?>
		<?php echo $form->textField($model,'p_dateOfDeath'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_gender'); ?>
		<?php echo $form->textField($model,'p_gender',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
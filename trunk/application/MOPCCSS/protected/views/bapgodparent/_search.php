<?php
/* @var $this BapgodparentController */
/* @var $model Bapgodparent */
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
		<?php echo $form->label($model,'baptismal_id'); ?>
		<?php echo $form->textField($model,'baptismal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
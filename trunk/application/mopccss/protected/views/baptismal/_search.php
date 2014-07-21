<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */
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
		<?php echo $form->label($model,'bap_bapDate'); ?>
		<?php echo $form->textField($model,'bap_bapDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bap_priest'); ?>
		<?php echo $form->textField($model,'bap_priest',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bap_church'); ?>
		<?php echo $form->textField($model,'bap_church',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bap_churchAdd'); ?>
		<?php echo $form->textField($model,'bap_churchAdd',array('size'=>60,'maxlength'=>100)); ?>
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
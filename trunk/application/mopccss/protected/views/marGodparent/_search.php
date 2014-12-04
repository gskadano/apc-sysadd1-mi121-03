<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */
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
		<?php echo $form->label($model,'marriage_id'); ?>
		<?php echo $form->textField($model,'marriage_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mar_godparentname'); ?>
		<?php echo $form->textField($model,'mar_godparentname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
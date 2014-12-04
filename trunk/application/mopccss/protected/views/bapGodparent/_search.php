<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */
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
		<?php echo $form->label($model,'bap_godparentname'); ?>
		<?php echo $form->textField($model,'bap_godparentname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
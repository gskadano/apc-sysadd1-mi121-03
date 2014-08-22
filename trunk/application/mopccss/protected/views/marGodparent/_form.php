<?php
/* @var $this MarGodparentController */
/* @var $model MarGodparent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mar-godparent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marriage_id'); ?>
		<!--<?php echo $form->textField($model,'marriage_id'); ?> -->
                 <?php echo $form->dropDownList($model, 'marriage_id', CHtml::listData(
			marriage::model()->findAll(), 'id', 'id'),
			array('prompt' => 'Select a marriage')
			); ?>
		<?php echo $form->error($model,'marriage_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<!--<?php echo $form->textField($model,'person_id'); ?>-->
                  <?php echo $form->dropDownList($model, 'person_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select a person')
			); ?>
                  <?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conf-godparent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'confirmation_id'); ?>-->
		<!--<?php echo $form->textField($model,'confirmation_id'); ?>-->
		
		<!--<?php echo $form->dropDownList($model, 'confirmation_id', CHtml::listData(
			Confirmation::model()->findAll(), 'id', 'id'),//dapat name ng bibinyagan
			array('prompt' => 'Select baptismal')
			); ?>-->
		
		<?php echo $form->hiddenField($model,'confirmation_id'); ?>
		
		<!--<?php echo $form->error($model,'confirmation_id'); ?>-->
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conf_godparentname'); ?>
		<?php echo $form->textField($model,'conf_godparentname', array('size'=>50,'maxlength'=>100)); ?>
		<!--<?php echo $form->dropDownList($model, 'conf_godparentname', CHtml::listData(
				Person::model()->findAll(), 'id', 'FullName'),
				array('prompt' => 'Select a Person')
				); ?> Use if foreign key  -->
		<?php echo $form->error($model,'conf_godparentname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
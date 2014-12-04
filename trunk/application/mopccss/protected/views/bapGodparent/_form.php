<?php
/* @var $this BapGodparentController */
/* @var $model BapGodparent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bap-godparent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'baptismal_id'); ?>-->
		<!--<?php echo $form->textField($model,'baptismal_id'); ?>-->
		
		<!--<?php echo $form->dropDownList($model, 'baptismal_id', CHtml::listData(
			Baptismal::model()->findAll(), 'id', 'id'),//dapat name ng bibinyagan
			array('prompt' => 'Select baptismal')
			); ?>-->
		
		<?php echo $form->hiddenField($model,'baptismal_id'); ?>
		
		<!--<?php echo $form->error($model,'baptismal_id'); ?>-->
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_godparentname'); ?>
		<?php echo $form->textField($model,'bap_godparentname', array('size'=>50,'maxlength'=>100)); ?>
		<!--<?php echo $form->dropDownList($model, 'bap_godparentname', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select Godparents')
			); ?>use if foreign key -->
		<?php echo $form->error($model,'bap_godparentname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
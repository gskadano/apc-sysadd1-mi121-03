<?php
/* @var $this PositionController */
/* @var $model Position */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'position-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rank'); ?>
		<?php echo $form->textField($model,'rank',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afpServiceNum'); ?>
		<?php echo $form->textField($model,'afpServiceNum'); ?>
		<?php echo $form->error($model,'afpServiceNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branchOfService'); ?>
		<?php echo $form->textField($model,'branchOfService',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'branchOfService'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitAddress'); ?>
		<?php echo $form->textField($model,'unitAddress',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'unitAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positioncol'); ?>
		<?php echo $form->textField($model,'positioncol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'positioncol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<!--<?php echo $form->textField($model,'client_id'); ?> -->
                <?php echo $form->dropDownList($model, 'client_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select an Client')
			); ?>
                
		<?php echo $form->error($model,'client_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this MarriageController */
/* @var $model Marriage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marriage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mar_marDate'); ?>			
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'mar_marDate',
	        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-30:+20',
            'changeYear'=>'true',
	        'changeMonth'=>'true',
        ),
			)); ?>
            <?php echo $form->error($model,'mar_marDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mar_priest'); ?>
		<!--<?php echo $form->textField($model,'mar_priest',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model, 'mar_priest', CHtml::listData(
			Priest::model()->findAll(), 'pfname', 'PFullName'),
			array('prompt' => 'Select a Priest')
			); ?>
		<?php echo $form->error($model,'mar_priest'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select an Employee')
			); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bride_id'); ?>
			<?php echo $form->dropDownList($model, 'bride_id', CHtml::listData(
				Person::model()->findAll(), 'id', 'FullName'),
				array('prompt' => 'Select the bride')
				); ?>
		<?php echo $form->error($model,'bride_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groom_id'); ?>
			<?php echo $form->dropDownList($model, 'groom_id', CHtml::listData(
				Person::model()->findAll(), 'id', 'FullName'),
				array('prompt' => 'Select the groom')
				); ?>
		<?php echo $form->error($model,'groom_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
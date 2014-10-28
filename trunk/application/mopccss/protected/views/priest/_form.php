<?php
/* @var $this PriestController */
/* @var $model Priest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'priest-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pfname'); ?>
		<?php echo $form->textField($model,'pfname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pfname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plname'); ?>
		<?php echo $form->textField($model,'plname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'plname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pmname'); ?>
		<?php echo $form->textField($model,'pmname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pmname'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dateOfBirth'); ?>
		<!--<?php echo $form->textField($model,'dateOfBirth'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'dateOfBirth',
	        'options'=>array(
	            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
	        ),
		)); ?>
		<?php echo $form->error($model,'dateOfBirth'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'placeOfBirth'); ?>
		<?php echo $form->textField($model,'placeOfBirth',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'placeOfBirth'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'crasm_no'); ?>
		<?php echo $form->textField($model,'crasm_no',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'crasm_no'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'exp_date'); ?>
		<!--<?php echo $form->textField($model,'exp_date'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'exp_date',
	        'options'=>array(
	            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
	        ),
		)); ?>
		<?php echo $form->error($model,'exp_date'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pr_father'); ?>
		<?php echo $form->textField($model,'pr_father',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pr_father'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pr_mother'); ?>
		<?php echo $form->textField($model,'pr_mother',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pr_mother'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ordainedAsPriest'); ?>
		<!--<?php echo $form->textField($model,'ordainedAsPriest'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'ordainedAsPriest',
	        'options'=>array(
	            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
	        ),
		)); ?>
		<?php echo $form->error($model,'ordainedAsPriest'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'placeOfOrdination'); ?>
		<?php echo $form->textField($model,'placeOfOrdination',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'placeOfOrdination'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ordainingBishop'); ?>
		<?php echo $form->textField($model,'ordainingBishop',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ordainingBishop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'church_id'); ?>
		<!--<?php echo $form->textField($model,'church_id'); ?>-->
		<?php echo $form->dropDownList($model, 'church_id', CHtml::listData(
			Church::model()->findAll(), 'id', 'ch_name'),
			array('prompt' => 'Select church')
			); ?>
		<?php echo $form->error($model,'church_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
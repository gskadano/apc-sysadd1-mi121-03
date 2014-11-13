<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_fname') ; ?>
		<?php echo $form->textField($model,'p_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_middlename'); ?>
		<?php echo $form->textField($model,'p_middlename',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_lname'); ?>
		<?php echo $form->textField($model,'p_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_dateOfBirth'); ?>
		<!--<?php echo $form->textField($model,'p_dateOfBirth'); ?> -->
                
                <!--Calendar -->
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model, 'attribute'=>'p_dateOfBirth',
        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
        ),
            )); ?>
                
		<?php echo $form->error($model,'p_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_placeOfBirth'); ?>
		<?php echo $form->textField($model,'p_placeOfBirth',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_placeOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_address'); ?>
		<?php echo $form->textField($model,'p_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'p_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_dateOfDeath'); ?>
		<!--<?php echo $form->textField($model,'p_dateOfDeath'); ?>-->
            <!--Calendar -->
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model, 'attribute'=>'p_dateOfDeath',
        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-10:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
        ),
            )); ?>
            
            
		<?php echo $form->error($model,'p_dateOfDeath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_gender'); ?>
            
		<?php // echo $form->textField($model,'p_gender',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->dropDownList($model,'p_gender',array("Male"=>"Male", "Female"=>"Female" )
			,array('empty'=>'Select Customer Gender')); ?>
        <?php echo $form->error($model,'p_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_father'); ?>
		<?php echo $form->textField($model,'p_father',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'p_father'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_mother'); ?>
		<?php echo $form->textField($model,'p_mother',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'p_mother'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ccertificate'); ?>
		<?php echo $form->dropDownList($model,'ccertificate',array("Baptismal"=>"Baptismal", "Confirmation"=>"Confirmation", "Marriage"=>"Marriage")
			,array('empty'=>'Select Certificate Type')); ?>
		<?php echo $form->error($model,'ccertificate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next>>' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
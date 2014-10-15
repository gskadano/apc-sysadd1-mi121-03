<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_username'); ?>
		<?php echo $form->textField($model,'emp_username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emp_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_password'); ?>
		<?php echo $form->textField($model,'emp_password',array('size'=>45,'maxlength'=>45, 'beforeSave')); ?>
		<?php echo $form->error($model,'emp_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_usertype'); ?>
		<?php echo $form->textField($model,'emp_usertype',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emp_usertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_fname'); ?>
		<?php echo $form->textField($model,'emp_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emp_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_lname'); ?>
		<?php echo $form->textField($model,'emp_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emp_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_hireDate'); ?>
		<!--<?php echo $form->textField($model,'emp_hireDate'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'emp_hireDate',
	        'options'=>array(
	            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
	        ),
		)); ?>
		<?php echo $form->error($model,'emp_hireDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_retireDate'); ?>
		<!--<?php echo $form->textField($model,'emp_retireDate'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'model'=>$model, 'attribute'=>'emp_retireDate',
	        'options'=>array(
	            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
	        ),
		)); ?>
		<?php echo $form->error($model,'emp_retireDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_chapAssign'); ?>
		<?php echo $form->textField($model,'emp_chapAssign',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emp_chapAssign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'church_id'); ?>
		<!--<?php echo $form->textField($model,'church_id'); ?>-->
		<?php echo $form->dropDownList($model, 'church_id', CHtml::listData(
			Church::model()->findAll(), 'id', 'ch_name'),
			array('prompt' => 'Select a Church')
			); ?>
		<?php echo $form->error($model,'church_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
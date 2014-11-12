<?php
/* @var $this EmployeeController */
/* @var $model Employee */
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
		<?php echo $form->label($model,'emp_username'); ?>
		<?php echo $form->textField($model,'emp_username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_usertype'); ?>
		<?php echo $form->textField($model,'emp_usertype',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_fname'); ?>
		<?php echo $form->textField($model,'emp_fname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_lname'); ?>
		<?php echo $form->textField($model,'emp_lname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_hireDate'); ?>
		<?php echo $form->textField($model,'emp_hireDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_retireDate'); ?>
		<?php echo $form->textField($model,'emp_retireDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_chapAssign'); ?>
		<?php echo $form->textField($model,'emp_chapAssign',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_email'); ?>
		<?php echo $form->textField($model,'emp_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'church_id'); ?>
		<?php echo $form->textField($model,'church_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
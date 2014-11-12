<?php
/* @var $this BaptismalController */
/* @var $model Baptismal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'baptismal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_bapDate'); ?>
		<!--php echo $form->textField($model,'bap_bapDate'); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model, 'attribute'=>'bap_bapDate',
        'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'yearRange'=>'-20:+20',
            'changeYear'=>'true',
            'changeMonth'=>'true',
        ),
		)); ?>
		<?php echo $form->error($model,'bap_bapDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_church'); ?>
		<!--<?php echo $form->textField($model,'bap_church',array('size'=>45,'maxlength'=>45)); ?>-->
		<?php echo $form->dropDownList($model, 'bap_church', CHtml::listData(
			Church::model()->findAll(), 'ch_name', 'ch_name'),
			array('prompt' => 'Select a Church')
			); ?>
		<?php echo $form->error($model,'bap_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_churchAdd'); ?>
		<!--<?php echo $form->textField($model,'bap_churchAdd',array('size'=>60,'maxlength'=>100)); ?>-->
		<?php echo $form->dropDownList($model, 'bap_churchAdd', CHtml::listData(
			Church::model()->findAll(), 'ch_address', 'ch_address'),
			array('prompt' => 'Select a Church Address')
			); ?>
		<?php echo $form->error($model,'bap_churchAdd'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bap_priest'); ?>
		<?php echo $form->dropDownList($model, 'bap_priest', CHtml::listData(
			Priest::model()->findAll(), 'PFullName', 'PFullName'),
			array('prompt' => 'Select a Priest')
			); ?>
		<?php echo $form->error($model,'bap_priest'); ?>
	</div>

	<div class="row">
		<?php 
		$criteria = new CDbCriteria();
		$criteria->select = 'id';
		$criteria->condition = 'emp_username=:name';
		$criteria->params = array(':name'=>Yii::app()->user->name);
		?>
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll('emp_username = :a', array(':a'=>Yii::app()->user->name)), 'id', 'FullName')); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
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
	
	<H2>God Parent</H2>
	
	<div class="row">
		<!--<?php echo $form->labelEx($godparent,'baptismal_id'); ?>-->
		<!--<?php echo $form->textField($godparent,'baptismal_id'); ?>-->
		
		<?php echo $form->hiddenField($godparent,'baptismal_id'); ?>
		
		<!--<?php echo $form->dropDownList($godparent, 'baptismal_id', CHtml::listData(
			Baptismal::model()->findAll(), 'id', 'id'),//dapat name ng bibinyagan
			array('prompt' => 'Select baptismal')
			); ?>-->
		
		<!--<?php echo $form->error($godparent,'baptismal_id'); ?>-->
	</div>

	<div class="row">
		<?php echo $form->labelEx($godparent,'person_id'); ?>
		<!--<?php echo $form->textField($godparent,'person_id'); ?>-->
		<?php echo $form->dropDownList($godparent, 'person_id', CHtml::listData(
			Person::model()->findAll(), 'id', 'FullName'),
			array('prompt' => 'Select Godparents')
			); ?>
		<?php echo $form->error($godparent,'person_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
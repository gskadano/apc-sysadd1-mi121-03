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
		<!--<?php echo $form->dropDownList($model, 'mar_priest', CHtml::listData(
			Priest::model()->findAll(), 'PFullName', 'PFullName'),
			array('prompt' => 'Select a Priest')
			); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
			'model'=>$model,
			'attribute'=>'mar_priest',
			'name'=>'ajaxrequest',
			// additional javascript options for the autocomplete plugin
			'options'=>array(
				'minLength'=>'1',
			),
			'source'=>$this->createUrl("Marriage/Ajax"),
			'htmlOptions'=>array(
				'style'=>'height:20px;',
			),
		));
		?>
		<?php echo $form->error($model,'mar_priest'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll('emp_username = :a', array(':a'=>Yii::app()->user->name)), 'id', 'FullName')); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bride_id'); ?>
		<?php echo $form->dropDownList($model, 'bride_id', CHtml::listData(
			Person::model()->findAll('p_gender=:gender', array(':gender'=>'Female')), 'id', 'FullName'),
			array('prompt' => 'Select the bride')
		); ?>
				
		<!--<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'bride_id',
			'data'=>CHtml::listData(Church::model()->findAll(), 'id', 'FullName'),
		)); ?>-->
		<?php echo $form->error($model,'bride_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groom_id'); ?>
		<?php echo $form->dropDownList($model, 'groom_id', CHtml::listData(
			Person::model()->findAll('p_gender=:gender', array(':gender'=>'Male')), 'id', 'FullName'),
			array('prompt' => 'Select the groom')
			); ?>
		<!--<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'groom_id',
			'data'=>CHtml::listData(Church::model()->findAll(), 'id', 'FullName'),
		)); ?>-->
		<?php echo $form->error($model,'groom_id'); ?>
	</div>
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'mar_bkno'); ?>
		<?php echo $form->textField($model,'mar_bkno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mar_bkno'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'mar_series'); ?>
		<?php echo $form->textField($model,'mar_series',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mar_series'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'mar_pageno'); ?>
		<?php echo $form->textField($model,'mar_pageno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mar_pageno'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'mar_lineno'); ?>
		<?php echo $form->textField($model,'mar_lineno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mar_lineno'); ?>
	</div>
	
		<H2>Godparent</H2>
	
	<div class="row">
		<!--<?php echo $form->labelEx($godparent,'marriage_id'); ?>-->
		<!--<?php echo $form->textField($godparent,'marriage_id'); ?>-->
	
			<?php echo $form->hiddenField($godparent,'marriage_id'); ?>
	
		<!--<?php echo $form->dropDownList($godparent, 'marriage_id', CHtml::listData(
			Marriage::model()->findAll(), 'id', 'id'),//dapat name ng bibinyagan
			array('prompt' => 'Select baptismal')
				); ?>-->

		<!--<?php echo $form->error($godparent,'marriage_id'); ?>-->
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

		<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
		echo'<p> MOBILE </p>';
		}
		?>
		
<?php $this->endWidget(); ?>

</div><!-- form -->
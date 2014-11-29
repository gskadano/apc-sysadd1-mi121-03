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
		
		<!--<?php echo $form->dropDownList($model,'bap_church',CHtml::listData(Church::model()->findAll(), 'ch_name', 'ch_name'),
                        array('empty' => 'Select Church',
                        'ajax'=>array(
                        //'type='=>'POST',
                        'type='=>'GET',
                        'url'=>CController::createUrl('Baptismal/Church'),
                        'update'=>'#'.CHtml::activeId($model, 'bap_churchAdd'),
						//'update'=>'#bap_churchAdd',
                        'data'=>array('bap_church'=>'js:this.value'),
                ))); ?>-->
				
		<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'bap_church',
			'data'=>CHtml::listData(Church::model()->findAll(), 'ch_name', 'ch_name'),
		)); ?>
		<?php echo $form->error($model,'bap_church'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_churchAdd'); ?>
		<!--<?php echo $form->textField($model,'bap_churchAdd',array('size'=>60,'maxlength'=>100)); ?>-->
		<!--<?php echo $form->dropDownList($model, 'bap_churchAdd', CHtml::listData(
			Church::model()->findAll(), 'ch_address', 'ch_address'),
			array('prompt' => 'Select a Church Address')
			); ?>-->
		<?php echo $form->dropDownList($model,'bap_churchAdd', array('prompt' => 'Select Address')); ?>
		<?php echo $form->error($model,'bap_churchAdd'); ?>
	</div>

	<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).attr("value")=="red"){
                $(".red").toggle();
            }
        });
    });
	</script>
	
	<div class="row red">
		<?php echo $form->labelEx($model,'bap_priest'); ?>
		<!--<?php echo $form->dropDownList($model, 'bap_priest', CHtml::listData(
			Priest::model()->findAll(), 'PFullName', 'PFullName'),
			array('prompt' => 'Select a Priest')
			); ?>-->
		<!--<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'bap_priest',
			'data'=>CHtml::listData(Priest::model()->findAll(), 'PFullName', 'PFullName'),
		)); ?>-->
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
			'model'=>$model,
			'attribute'=>'bap_priest',
			'name'=>'ajaxrequest',
			// additional javascript options for the autocomplete plugin
			'options'=>array(
				'minLength'=>'1',
			),
			'source'=>$this->createUrl("Baptismal/ajax"),
			'htmlOptions'=>array(
				'style'=>'height:20px;',
			),
		));
		?>
		<?php echo $form->error($model,'bap_priest'); ?>
	</div>
	<!-- alternate textfield for priest -->
	<!--<div class="row red" style="display: none;">
		<?php echo $form->labelEx($model,'bap_priest'); ?>
		<?php echo $form->textField($model, 'bap_priest'); ?>
		<?php echo $form->error($model,'bap_priest'); ?>
	</div>
	<div class="row">
			<label><input type="checkbox" name="colorCheckbox" value="red"> Check if priest is not under MOP priests.</label>
	</div>-->
	
	<div class="row">
		<?php echo $form->labelEx($model,'Employee_id'); ?>
		<!--<?php echo $form->textField($model,'Employee_id'); ?>-->
		<?php echo $form->dropDownList($model, 'Employee_id', CHtml::listData(
			Employee::model()->findAll('emp_username = :a', array(':a'=>Yii::app()->user->name)), 'id', 'FullName')); ?>
		<?php echo $form->error($model,'Employee_id'); ?>
	</div>

	<div class="row">
		<!--<?php echo $form->labelEx($model,'person_id'); ?>-->
		<!--<?php echo $form->textField($model,'person_id'); ?>-->
		<!--<?php $this->widget('ext.select2.ESelect2',array(
			'model'=>$model,
			'attribute'=>'person_id',
			'data'=>CHtml::listData(Person::model()->findAll(), 'id', 'FullName'),
		)); ?>-->
		<?php echo $form->hiddenField($model, 'person_id'); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bap_bkno'); ?>
		<?php echo $form->textField($model,'bap_bkno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'bap_bkno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bap_series'); ?>
		<?php echo $form->textField($model,'bap_series',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'bap_series'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bap_pageno'); ?>
		<?php echo $form->textField($model,'bap_pageno',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'bap_pageno'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bap_lineno'); ?>
		<?php echo $form->textField($model,'bap_lineno',array('size'=>20'maxlength'=>5)); ?>
		<?php echo $form->error($model,'bap_lineno'); ?>
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
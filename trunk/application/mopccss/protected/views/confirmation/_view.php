<?php
/* @var $this ConfirmationController */
/* @var $data Confirmation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_confDate')); ?>:</b>
	<?php echo CHtml::encode($data->conf_confDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapChurch')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapChurch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapAdd')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapAdd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_church')); ?>:</b>
	<?php echo CHtml::encode($data->conf_church); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_priest')); ?>:</b>
	<?php echo CHtml::encode($data->conf_priest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->Employee_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_id')); ?>:</b>
	<?php echo CHtml::encode($data->father_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_id')); ?>:</b>
	<?php echo CHtml::encode($data->mother_id); ?>
	<br />

	*/ ?>

</div>
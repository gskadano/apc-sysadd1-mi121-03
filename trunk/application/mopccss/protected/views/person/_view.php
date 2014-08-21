<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_fname')); ?>:</b>
	<?php echo CHtml::encode($data->p_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->p_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_lname')); ?>:</b>
	<?php echo CHtml::encode($data->p_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_placeOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_placeOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_address')); ?>:</b>
	<?php echo CHtml::encode($data->p_address); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfDeath')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfDeath); ?>
        <br/>

        <b><?php echo CHtml::encode($data->getAttributeLabel('p_gender')); ?>:</b>
	<?php echo CHtml::encode($data->p_gender); ?>


	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfDeath')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfDeath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_gender')); ?>:</b>
	<?php echo CHtml::encode($data->p_gender); ?>
	<br />

	*/ ?>

</div>
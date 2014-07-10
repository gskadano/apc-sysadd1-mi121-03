<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_username')); ?>:</b>
	<?php echo CHtml::encode($data->emp_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_password')); ?>:</b>
	<?php echo CHtml::encode($data->emp_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_usertype')); ?>:</b>
	<?php echo CHtml::encode($data->emp_usertype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_fname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_lname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_hireDate')); ?>:</b>
	<?php echo CHtml::encode($data->emp_hireDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_retireDate')); ?>:</b>
	<?php echo CHtml::encode($data->emp_retireDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_chapAssign')); ?>:</b>
	<?php echo CHtml::encode($data->emp_chapAssign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('church_id')); ?>:</b>
	<?php echo CHtml::encode($data->church_id); ?>
	<br />

	*/ ?>

</div>
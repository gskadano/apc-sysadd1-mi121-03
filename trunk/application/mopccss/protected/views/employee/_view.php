<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FullName), array('view', 'id'=>$data->id)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_usertype')); ?>:</b>
	<?php echo CHtml::encode($data->emp_usertype); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('emp_fname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_fname); ?>
	<br />-->

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('emp_lname')); ?>:</b>
	<?php echo CHtml::encode($data->emp_lname); ?>
	<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_retireDate')); ?>:</b>
	<?php echo CHtml::encode($data->emp_retireDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_chapAssign')); ?>:</b>
	<?php echo CHtml::encode($data->emp_chapAssign); ?>
	<br />
		*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('church_id')); ?>:</b>
	<?php //echo CHtml::encode($data->church_id); 
			echo CHtml::encode($data->church->ch_name);?>
	<br />



</div>
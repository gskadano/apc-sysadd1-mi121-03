<?php
/* @var $this MarriageController */
/* @var $data Marriage */
?>

<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    ?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('Church')); ?>:</b>
	
	<?php //echo CHtml::encode($data->Employee_id);
		echo CHtml::encode($data->employee->church->ch_name); ?>
	
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id);
		echo CHtml::encode($data->employee->FullName); ?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bride_id')); ?>:</b>
	<?php //echo CHtml::encode($data->bride_id); 
			echo CHtml::encode($data->bride->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groom_id')); ?>:</b>
	<?php //echo CHtml::encode($data->groom_id); 
			echo CHtml::encode($data->groom->FullName); ?>
	<br />


</div>
<?php }else { ?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Church')); ?>:</b>
	
	<?php //echo CHtml::encode($data->Employee_id);
		echo CHtml::encode($data->employee->church->ch_name); ?>
	
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id);
		echo CHtml::encode($data->employee->FullName); ?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bride_id')); ?>:</b>
	<?php //echo CHtml::encode($data->bride_id); 
			echo CHtml::encode($data->bride->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groom_id')); ?>:</b>
	<?php //echo CHtml::encode($data->groom_id); 
			echo CHtml::encode($data->groom->FullName); ?>
	<br />


</div>

<?php } ?>

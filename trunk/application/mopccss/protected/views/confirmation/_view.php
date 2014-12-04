<?php
/* @var $this ConfirmationController */
/* @var $data Confirmation */
?>


<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    ?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person->FullName); ?>
	<br />
        
<!--        <b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id);
			echo CHtml::encode($data->person->FullName); ?>
	<br />-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_confDate')); ?>:</b>
	<?php echo CHtml::encode($data->conf_confDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapChurch')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapChurch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapAdd')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapAdd); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_priest')); ?>:</b>
	<?php echo CHtml::encode($data->conf_priest); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id); 
			echo CHtml::encode($data->employee->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_church')); ?>:</b>
	<?php echo CHtml::encode($data->conf_church); ?>
	<br />

</div>
<?php }else { ?>


<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->person->FullName), array('view', 'id'=>$data->id)); ?>
	<br />
        
<!--        <b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id);
			echo CHtml::encode($data->person->FullName); ?>
	<br />-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_confDate')); ?>:</b>
	<?php echo CHtml::encode($data->conf_confDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapChurch')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapChurch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_bapAdd')); ?>:</b>
	<?php echo CHtml::encode($data->conf_bapAdd); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_priest')); ?>:</b>
	<?php echo CHtml::encode($data->conf_priest); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id); 
			echo CHtml::encode($data->employee->FullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_church')); ?>:</b>
	<?php echo CHtml::encode($data->conf_church); ?>
	<br />

</div>
<?php } ?>



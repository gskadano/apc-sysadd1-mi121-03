<?php
/* @var $this BaptismalController */
/* @var $data Baptismal */
?>

<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    ?>
                    <div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id);
			echo CHtml::encode($data->person->FullName); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id); 
			echo CHtml::encode($data->employee->FullName); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('bap_bapDate')); ?>:</b>
	<?php echo CHtml::encode($data->bap_bapDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bap_priest')); ?>:</b>
	<?php echo CHtml::encode($data->bap_priest); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('bap_church')); ?>:</b>
	<?php echo CHtml::encode($data->bap_church); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('bap_churchAdd')); ?>:</b>
	<?php echo CHtml::encode($data->bap_churchAdd); ?>
	<br />-->
</div>
                   
 

<?php }else { ?>

 <div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id);
			echo CHtml::link(CHtml::encode($data->person->FullName), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_id')); ?>:</b>
	<?php //echo CHtml::encode($data->Employee_id); 
			echo CHtml::encode($data->employee->FullName); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('bap_bapDate')); ?>:</b>
	<?php echo CHtml::encode($data->bap_bapDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bap_priest')); ?>:</b>
	<?php echo CHtml::encode($data->bap_priest); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('bap_church')); ?>:</b>
	<?php echo CHtml::encode($data->bap_church); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('bap_churchAdd')); ?>:</b>
	<?php echo CHtml::encode($data->bap_churchAdd); ?>
	<br />-->
</div>

<?php } ?>


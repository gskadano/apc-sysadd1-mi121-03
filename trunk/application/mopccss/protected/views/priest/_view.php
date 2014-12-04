<?php
/* @var $this PriestController */
/* @var $data Priest */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('pname')); ?>:</b>
	<?php echo CHtml::encode($data->PFullName);?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('plname')); ?>:</b>
	<?php echo CHtml::encode($data->plname); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('church_id')); ?>:</b>
	<?php //echo CHtml::encode($data->church_id); 
			echo CHtml::encode($data->church->ch_name); ?>
	<br />


</div>

<?php }else { ?>
<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('pname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PFullName), array('view', 'id'=>$data->id));?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('plname')); ?>:</b>
	<?php echo CHtml::encode($data->plname); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('church_id')); ?>:</b>
	<?php //echo CHtml::encode($data->church_id); 
			echo CHtml::encode($data->church->ch_name); ?>
	<br />


</div>

<?php } ?>

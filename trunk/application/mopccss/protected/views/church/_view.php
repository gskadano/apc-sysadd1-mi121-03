<?php
/* @var $this ChurchController */
/* @var $data Church */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_name')); ?>:</b>
	<?php echo CHtml::encode($data->ch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_address')); ?>:</b>
	<?php echo CHtml::encode($data->ch_address); ?>
	<br />


</div>

<?php }else { ?>
<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ch_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_address')); ?>:</b>
	<?php echo CHtml::encode($data->ch_address); ?>
	<br />


</div>

<?php } ?>

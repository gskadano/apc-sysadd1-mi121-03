<?php
/* @var $this PriestController */
/* @var $data Priest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pfname')); ?>:</b>
	<?php echo CHtml::encode($data->pfname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plname')); ?>:</b>
	<?php echo CHtml::encode($data->plname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('church_id')); ?>:</b>
	<?php //echo CHtml::encode($data->church_id); 
			echo CHtml::encode($data->church->ch_name); ?>
	<br />


</div>
<?php
/* @var $this ChurchController */
/* @var $data Church */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_name')); ?>:</b>
	<?php echo CHtml::encode($data->ch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_address')); ?>:</b>
	<?php echo CHtml::encode($data->ch_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_priest')); ?>:</b>
	<?php echo CHtml::encode($data->ch_priest); ?>
	<br />


</div>
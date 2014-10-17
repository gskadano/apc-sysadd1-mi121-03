<?php
/* @var $this PositionController */
/* @var $data Position */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->client->FullName), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank')); ?>:</b>
	<?php echo CHtml::encode($data->rank); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('afpServiceNum')); ?>:</b>
	<?php echo CHtml::encode($data->afpServiceNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branchOfService')); ?>:</b>
	<?php echo CHtml::encode($data->branchOfService); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitAddress')); ?>:</b>
	<?php echo CHtml::encode($data->unitAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('positioncol')); ?>:</b>
	<?php echo CHtml::encode($data->positioncol); ?>
	<br />-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php //echo CHtml::encode($data->client_id); 
            echo CHtml::encode($data->client->FullName); ?>
	<br />-->


</div>
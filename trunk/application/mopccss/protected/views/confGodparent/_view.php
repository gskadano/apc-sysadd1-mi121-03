<?php
/* @var $this ConfGodparentController */
/* @var $data ConfGodparent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('conf_godparentname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->conf_godparentname), array('view', 'id'=>$data->id)); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmation_id')); ?>:</b>
	<?php //echo CHtml::encode($data->confirmation_id); 
			echo CHtml::encode($data->confirmation->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id); 
			echo CHtml::encode($data->conf_godparentname); ?>
	<br />-->


</div>
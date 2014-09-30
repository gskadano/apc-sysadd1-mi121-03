<?php
/* @var $this BapGodparentController */
/* @var $data BapGodparent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baptismal_id')); ?>:</b>
	<?php echo CHtml::encode($data->baptismal_id); 
			/*echo CHtml::encode($data->baptismal->FullNameBap);*/ ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php //echo CHtml::encode($data->person_id); 
			echo CHtml::encode($data->person->FullName); ?>
	<br />


</div>
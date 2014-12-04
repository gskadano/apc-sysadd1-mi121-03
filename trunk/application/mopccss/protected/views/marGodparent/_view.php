<?php
/* @var $this MarGodparentController */
/* @var $data MarGodparent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marriage_id')); ?>:</b>
	<?php echo CHtml::encode($data->marriage_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mar_godparentname')); ?>:</b>
	<?php //echo CHtml::encode($data->mar_godparentname); 
        echo CHtml::encode($data->mar_godparentname); ?>
	<br />


</div>
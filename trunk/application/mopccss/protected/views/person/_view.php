<?php
/* @var $this PersonController */
/* @var $data Person */
?>



<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    ?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->FullName); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('p_fname')); ?>:</b>
	<?php echo CHtml::encode($data->p_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->p_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_lname')); ?>:</b>
	<?php echo CHtml::encode($data->p_lname); ?>
	<br />-->

        <b><?php echo CHtml::encode($data->getAttributeLabel('p_address')); ?>:</b>
	<?php echo CHtml::encode($data->p_address); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfBirth); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('p_placeOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_placeOfBirth); ?>
	<br />-->

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfDeath')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfDeath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_gender')); ?>:</b>
	<?php echo CHtml::encode($data->p_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_father')); ?>:</b>
	<?php echo CHtml::encode($data->p_father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_mother')); ?>:</b>
	<?php echo CHtml::encode($data->p_mother); ?>
	<br />

	*/ ?>

</div>
<?php }else { ?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FullName), array('view', 'id'=>$data->id)); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('p_fname')); ?>:</b>
	<?php echo CHtml::encode($data->p_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_middlename')); ?>:</b>
	<?php echo CHtml::encode($data->p_middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_lname')); ?>:</b>
	<?php echo CHtml::encode($data->p_lname); ?>
	<br />-->

        <b><?php echo CHtml::encode($data->getAttributeLabel('p_address')); ?>:</b>
	<?php echo CHtml::encode($data->p_address); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfBirth); ?>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('p_placeOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->p_placeOfBirth); ?>
	<br />-->

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_dateOfDeath')); ?>:</b>
	<?php echo CHtml::encode($data->p_dateOfDeath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_gender')); ?>:</b>
	<?php echo CHtml::encode($data->p_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_father')); ?>:</b>
	<?php echo CHtml::encode($data->p_father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_mother')); ?>:</b>
	<?php echo CHtml::encode($data->p_mother); ?>
	<br />

	*/ ?>

</div>
<?php } ?>

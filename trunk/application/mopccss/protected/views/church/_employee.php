<?php $conf= Employee::model()->findAll('church_id = :a', array(':a'=>$modelID));?>
<?php if (count($conf) !== 0){?>
<br>
<h1>Employee's Information</h1>

<?php foreach ($conf as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('employee/update', 'id'=>$row->id)); ?>

<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/delete.png" align="right"/>',
	'#',array('submit'=>array('employee/delete','id'=>$row->id),'confirm' => 'Are you sure you want to delete?')); ?>  
<?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$row,
                'attributes'=>array(   
                                'emp_username',
								'emp_password',
								'emp_usertype',
								'emp_fname',
								'emp_lname',
								'emp_hireDate',
								'emp_retireDate',
								'emp_chapAssign',
            ),
        )); ?>
<br><?php }}else{ echo "Currently no employee is assigned on this church!";} ?>
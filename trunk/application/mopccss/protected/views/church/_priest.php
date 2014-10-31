<?php $conf= Priest::model()->findAll('church_id = :a', array(':a'=>$modelID));?>
<?php if (count($conf) !== 0){?>
<br>
<h1>Priest's Information</h1>
<?php foreach ($conf as $row) { ?>
<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/update.png" align="right"/>', 
array('employee/update', 'id'=>$row->id)); ?>

<?php echo CHtml::link('<img src="' . Yii::app()->request->baseUrl . '/images/delete.png" align="right"/>',
	'#',array('submit'=>array('employee/delete','id'=>$row->id),'confirm' => 'Are you sure you want to delete?')); ?>  
<?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$row,
                'attributes'=>array(   
                                'pfname',
								'plname',
								'church.ch_name',
            ),
        )); ?>
<br><?php }}else{ echo "Currently no priest is assigned on this church!";} ?>
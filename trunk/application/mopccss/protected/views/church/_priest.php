<?php $conf= Priest::model()->findAll('church_id = :a', array(':a'=>$modelID));?>
<?php if (count($conf) !== 0){?>
<br>
<h1>Priest's Information</h1>
<?php foreach ($conf as $row) { ?>
<?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$row,
                'attributes'=>array(   
                                'pfname',
								'plname',
								'church.ch_name',
            ),
        )); ?>
<br><?php }}else{ echo "Currently no priest is assigned on this church!";} ?>
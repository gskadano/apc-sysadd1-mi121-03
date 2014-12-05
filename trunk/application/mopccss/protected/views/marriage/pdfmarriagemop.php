<?php
/* @var $this ConfirmationController */
/* @var $model Confirmation */

$this->breadcrumbs=array(
	'Confirmations'=>array('index'),
       // 'Conf Godparents'=>array('index'),
	$model->id,
   
);

$this->menu=array(
	array('label'=>'Generate Report', 'url'=>array('pdf', 'id'=>$model->id)),
 
);
?>

<br>
<div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:center;">
<b><u><?php echo $model->groom->FullName . ",";?></u></b> son of <?php echo $model->groom->p_father . " " ;?> 
and <?php echo $model->groom->p_mother . " ," . $model->groom->p_address;?> 
</div>
<br><br><br>
<div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:center;">
<b><u><?php echo $model->bride->FullName . ",";?></u></b> son of <?php echo $model->bride->p_father . " " ;?> 
and <?php echo $model->bride->p_mother . " ," . $model->bride->p_address;?> 
</div>
<br>

<div style="font-size:25px;color:#000000;font-family:Times New Roman; text-align:center;">
    <b>received </b>
</div>
<div style="font-size:30px;color:#000000;font-family:Times New Roman; text-align:center;">
    <b>The Holy Sacrament of Matrimony </b>
</div>

<br>
<div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:left;">
   DATE: <?php echo $model->mar_marDate ?> <br> <br>
    PLACE: <?php echo $model->employee->church->ch_name ?>
    OFFICIATING MINISTER: <?php echo $model->mar_priest ?>
    SPONSOR/S: <?php $en=MarGodparent::model()->findAll('marriage_id = :a', array(':a'=>$model->id));?>
            <?php if (count($en) !== 0){?>
            <?php foreach ($en as $row) { ?>
           
               <?php echo $row->mar_godparentname ; ?> 
            
        <?php }} ?>

<br>
<br>
<div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:left;">    
      Book No: &nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
      Series No: &nbsp;&nbsp; 1996 <br>
      Page No: &nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
      Line No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
       </div>
<br>
Date of Issue:   <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'medium', false); ?>
<br>
Purpose :For reference
<br>
<br>
<b>Seal</b>

</div>
<h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $model->mar_priest ; ?> </h2>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            Major &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CHS
            <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            Chancellor,MOP

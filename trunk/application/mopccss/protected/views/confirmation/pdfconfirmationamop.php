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







<table align="center" border ="0" style="background-color: white" width="500"> 
    <tr>
        <td>
           <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b>
            </div>
        </td>
        
        <td style="alignment-adjust: "> 
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:left;">
                <b><?php echo $model->person->FullName; ?></b>
            </div>
        </td>
        
    </tr>
    
    
    <tr>   
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parents:</b>
            </div>
        </td>
        
        <td>
                <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
                    <b><i>(Father)</i></b> <?php echo $model->person->p_father; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
                    <b><i>(Mother)</i></b> <?php echo $model->person->p_mother; ?>
            </div>
            
        </td>
    </tr>
    
    <tr>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baptized on:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->person->p_dateOfBirth ; ?> 
            </div>
        </td>
    </tr>
    
    <tr>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>Place of Baptism:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo  $model->conf_bapChurch.','.$model->conf_bapAdd ; ?> 
            </div>
        </td>
    </tr>
	
</table>

<br>
<div style="font-size:20px;color:#000000;font-family:'Old English Text MT'; text-align:center; ">
<b>has received</b>
<img src="confirmation.png" width="1000px">
    <b>in the</b>
</div>
<br>

<table align="center" border ="0" style="background-color: white"  >
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chapel:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->conf_church ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->conf_bapAdd ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;Date:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->conf_confDate ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;By the:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo "Most Reverend ".$model->conf_priest; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>Sponsor/s being:</b>
            </div>
        </td>
        <td>
            <?php $en=ConfGodparent::model()->findAll('confirmation_id = :a', array(':a'=>$model->id));?>
            <?php if (count($en) !== 0){?>
            <?php foreach ($en as $row) { ?>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $row->conf_godparentname ; ?> 
            </div>
			<?php }} ?>
        </td>
    </tr>       
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Issue:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">          
                <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'medium', false); ?>
            </div>
        </td>
    </tr>   
    
     <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purpose:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">          
               For Marriage
            </div>
        </td>
    </tr>   
    
</table>
<br>
<br>


  <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:left;">    
      Book No: &nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
      Series No: &nbsp;&nbsp; 1996 <br>
      Page No: &nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
      Line No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 000 <br>
       </div>
<br>
<br>
  <table>
    <tr>    
        <td>  
            <h2>Seal</h2>
        </td>
        <td>
            <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $model->conf_priest ; ?> </h2>
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
            
            
        </td>
    </tr>
</table>







<?php //$this->widget('zii.widgets.CDetailView', array(
	//'data'=>$model,
	//'attributes'=>array(
	//	array('label'=>'Name', 'value'=>$model->person->FullName) ,
    //            array('label'=>'Date of Birth', 'value'=>$model->person->p_dateOfBirth),
    //            array('label'=>'Place of Birth', 'value'=>$model->person->p_placeOfBirth),
      //          array('label'=>'Address', 'value'=>$model->person->p_address),
        //        array('label'=>'Gender', 'value'=>$model->person->p_gender),
          //      array('label'=>'Father', 'value'=>$model->person->p_father),
            //    array('label'=>'Mother', 'value'=>$model->person->p_mother),
				
		//'conf_confDate',
		//'conf_bapChurch',
		//'conf_bapAdd',
	//	'conf_church',
		//'conf_priest',
		/*'Employee_id',*///array('label'=>'Employee', 'value'=>$model->employee->FullName),
		
	//),
//)); ?>

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		//'id',
//		'conf_confDate',
//		'conf_bapChurch',
//		'conf_bapAdd',
//		'conf_church',
//		'conf_priest',
//		/*'Employee_id',*/array('label'=>'Employee', 'value'=>$model->employee->FullName),
//		/*'person_id',*///array('label'=>'Person', 'value'=>$model->person->FullName),
//              //  array('label'=>'Father', 'value'=>$model->person->p_father),
//              //  array('label'=>'Mother', 'value'=>$model->person->p_mother),
//	),
//)); ?>




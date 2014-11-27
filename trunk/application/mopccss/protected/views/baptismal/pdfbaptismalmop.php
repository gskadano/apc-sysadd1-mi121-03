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





<table align="center" border ="0" style="background-color: white" width="500"  >
    
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
        <td> </td>
    </tr>
    <tr>
     
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b>
            </div>
        </td>
       <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->person->FullName ; ?> 
            </div>
        </td>
        
    </tr>
    
    
    <tr>   
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Parents:</b>
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
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:</b>
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
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place of Birth:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->person->p_placeOfBirth ; ?> 
            </div>
        </td>
    </tr>
    
   
	
</table>

<br>
<div style="font-size:20px;color:#000000;font-family:'Old English Text MT'; text-align:center; ">
<b>was solemnly baptized according to the rite of the</b>
</div>
<div style="font-size:45px;color:#000000;font-family:'Times new Roman'; text-align:center; ">
<b>ROMAN CATHOLIC CHURCH</b>
</div>
<br>

<table align="center" border ="0" style="background-color: white" width="500"  >
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Priest/Minister:</b>
            </div>
        </td>
       <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->bap_priest ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Baptism:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->bap_bapDate ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place of Baptism:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->bap_bapDate ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $model->bap_churchAdd ; ?> 
            </div>
        </td>
    </tr>   
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal Sponsor/s:</b>
            </div>
        </td>
        <td>
            <?php $en=BapGodparent::model()->findAll('baptismal_id = :a', array(':a'=>$model->id));?>
            <?php if (count($en) !== 0){?>
            <?php foreach ($en as $row) { ?>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
               <?php echo $row->person->FullName . " " ; ?> 
            </div>
        </td>
    </tr>   
    
    <?php }} ?>
    
    <tr>
         <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp; Date of Issue:</b>
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
            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purpose:</b>
            </div>
        </td>
        <td>
            <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:right;">          
               For Reference
            </div>
        </td>
    </tr>   
    
</table>
<br>
<br>


  <div style="font-size:16px;color:#000000;font-family:Times New Roman; text-align:left;">    
      Book No: &nbsp;&nbsp;&nbsp;&nbsp; 009 <br>
      Series No: &nbsp;&nbsp; 1957 <br>
      Page No: &nbsp;&nbsp;&nbsp;&nbsp; 125 <br>
      Line No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 001 <br>
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
            <?php echo $model->bap_priest ; ?> </h2>
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




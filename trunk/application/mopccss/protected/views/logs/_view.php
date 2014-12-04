<?php
/* @var $this LogsController */
/* @var $data Logs */
?>

<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    ?>

<div class="view">


<div class="posttext">

<?php
$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
       echo $data->description ." by " .CHtml::encode($data->employee->FullName) ." at " .$data->dateTime; 
       $this->endWidget();?>
</div>

</div>
<?php }else { ?>

<div class="view">


<div class="posttext">

<?php
$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
       echo $data->description ." by " .CHtml::link(CHtml::encode($data->employee->FullName), array('employee/view', 'id'=>$data->employee_id)) ." at " .$data->dateTime; 
       $this->endWidget();?>
</div>

</div>

<?php } ?>

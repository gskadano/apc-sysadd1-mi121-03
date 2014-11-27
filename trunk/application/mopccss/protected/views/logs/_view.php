<?php
/* @var $this LogsController */
/* @var $data Logs */
?>

<div class="view">


<div class="posttext">

<?php
$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
       echo $data->description ." by " .CHtml::link(CHtml::encode($data->employee->FullName), array('employee/view', 'id'=>$data->employee_id)) ." at " .$data->dateTime; 
       $this->endWidget();?>
</div>

</div>
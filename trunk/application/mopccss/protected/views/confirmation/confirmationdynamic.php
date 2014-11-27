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
<h1>Confirmation details of <?php echo $model->person->FullName; ?></h1>
 <div class="row">
     
		<?php //echo $form->labelEx($model,'ch_pic'); ?>
		<?php //echo $form->TextField($titleHeader); ?>
	
	</div>
    
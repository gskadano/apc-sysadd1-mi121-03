<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
 $this->breadcrumbs=array(
	'Confirmations',
);
$this->menu=array(
	//array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
                    
                    ?>
<h1 style="font-size: 45px">Confirmations</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('person_id', 'Employee_id', 'conf_church')
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this BaptismalController */
/* @var $dataProvider CActiveDataProvider */

  $this->breadcrumbs=array(
	'Confirmations',
);


$this->menu=array(
	array('label'=>'Manage Confirmation', 'url'=>array('admin')),
);
?>


<h1>Confirmations</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('person_id', 'Employee_id', 'conf_church')
)); ?>


<?php } ?>






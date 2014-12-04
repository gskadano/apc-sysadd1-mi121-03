<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
$this->breadcrumbs=array(
	'Logs',
);
$this->menu=array(
	//array('label'=>'Create Employee', 'url'=>array('create')),
	//array('label'=>'Manage Employee', 'url'=>array('admin')),
);
                    
                    ?>
<h1 style="font-size: 45px">Logs</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this LogsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logs',
);

/*
$this->menu=array(
	array('label'=>'Create Logs', 'url'=>array('create')),
	array('label'=>'Manage Logs', 'url'=>array('admin')),
);
*/
?>

<h1>Logs</h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php } ?>






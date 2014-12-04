<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
$this->breadcrumbs=array(
	'Priests',
);

$this->menu=array(
	//array('label'=>'Create Priest', 'url'=>array('create')),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>
<h1 style="font-size: 45px">Priests</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('pfname', 'plname', 'church_id')
)); ?>

</h1>

<?php }else { ?>
<?php
/* @var $this PriestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Priests',
);



$this->menu=array(
	array('label'=>'Create Priest', 'url'=>array('create')),
	array('label'=>'Manage Priest', 'url'=>array('admin')),
);
?>


<h1>Priests</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('pfname', 'plname', 'church_id')
)); ?>




<?php } ?>






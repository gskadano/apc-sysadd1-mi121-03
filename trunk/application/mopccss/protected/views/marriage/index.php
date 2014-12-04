<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
$this->breadcrumbs=array(
	'Marriages',
);
$this->menu=array(
	array('label'=>'Search', 'url'=>array('admin')),
);
?>
<h1 style="font-size: 45px">Marriages</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('bride_id', 'groom_id', 'Employee_id', 'id')
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this MarriagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marriages',
);


$this->menu=array(
	array('label'=>'Manage Marriage', 'url'=>array('admin')),
);
?>


<h1>Marriages</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('bride_id', 'groom_id', 'Employee_id', 'id')
)); ?>



<?php } ?>






<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
   $this->breadcrumbs=array(
	'Churches',
);
$this->menu=array(
	//array('label'=>'Create Baptismal', 'url'=>array('create')),
	array('label'=>'Search', 'url'=>array('admin')),
);
                    
                    ?>
<h1 style="font-size: 45px">Churches</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('ch_name', 'ch_address')
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this BaptismalController */
/* @var $dataProvider CActiveDataProvider */

  $this->breadcrumbs=array(
	'Churches',
);

$this->menu=array(
	array('label'=>'Create Church', 'url'=>array('create')),
	array('label'=>'Manage Church', 'url'=>array('admin')),
);
?>


<h1>Churches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('ch_name', 'ch_address')
)); ?>


<?php } ?>






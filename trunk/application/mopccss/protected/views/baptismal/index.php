<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
                    $this->breadcrumbs=array(
	'Baptismals',
);

$this->menu=array(
	//array('label'=>'Create Baptismal', 'url'=>array('create')),
	//array('label'=>'Manage Baptismal', 'url'=>array('admin')),
);
                    
                    ?>
<h1 style="font-size: 45px">Baptismals</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('person_id', 'Employee_id', 'bap_church')

        )); ?></h1>

<?php }else { ?>
<?php
/* @var $this BaptismalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Baptismals',
);

$this->menu=array(
	//array('label'=>'Create Baptismal', 'url'=>array('create')),
	array('label'=>'Manage Baptismal', 'url'=>array('admin')),
);
?>

<h1>Baptismals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('person_id', 'Employee_id', 'bap_church')

)); ?>

<?php } ?>






<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
$this->breadcrumbs=array(
	'Employees',
);

$this->menu=array(
	//array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Search', 'url'=>array('admin')),
);
                    
                    ?>
<h1 style="font-size: 45px">Employees</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('emp_fname','emp_lname','church_id')
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this BaptismalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employees',
);


$this->menu=array(
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>


<h1>Employees</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('emp_fname','emp_lname','church_id')
)); ?>


<?php } ?>






<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                    
$this->breadcrumbs=array(
	'People',
);

$this->menu=array(
	//array('label'=>'Create Person', 'url'=>array('create')),
	//array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>
<h1 style="font-size: 45px">People</h1>

<h1><?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('p_fname', 'p_lname')
)); ?>
</h1>

<?php }else { ?>
<?php
/* @var $this PersonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'People',
);



$this->menu=array(
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>


<h1>People</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('p_fname', 'p_lname')
)); ?>



<?php } ?>






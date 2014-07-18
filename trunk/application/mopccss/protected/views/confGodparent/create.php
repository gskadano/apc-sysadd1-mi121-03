<?php
/* @var $this ConfGodparentController */
/* @var $model ConfGodparent */

$this->breadcrumbs=array(
	'Conf Godparents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConfGodparent', 'url'=>array('index')),
	array('label'=>'Manage ConfGodparent', 'url'=>array('admin')),
);
?>

<h1>Create ConfGodparent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
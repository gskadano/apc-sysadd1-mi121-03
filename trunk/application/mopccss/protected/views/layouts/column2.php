<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Certificate',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->cert,
			'htmlOptions'=>array('class'=>'certificate'),
		));
		$this->endWidget();
	?>
	
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'List of Certificate',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->certlist,
			'htmlOptions'=>array('class'=>'certList'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
<?php
/* @var $this LocationHistoryController */
/* @var $data LocationHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('lhid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lhid), array('view', 'id'=>$data->lhid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgid')); ?>:</b>
	<?php echo CHtml::encode($data->tgid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lattitude')); ?>:</b>
	<?php echo CHtml::encode($data->lattitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />


</div>
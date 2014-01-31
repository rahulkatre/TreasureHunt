<?php
/* @var $this LocationHistoryController */
/* @var $model LocationHistory */

$this->breadcrumbs=array(
	'Location Histories'=>array('index'),
	$model->lhid,
);

$this->menu=array(
	array('label'=>'List LocationHistory', 'url'=>array('index')),
	array('label'=>'Create LocationHistory', 'url'=>array('create')),
	array('label'=>'Update LocationHistory', 'url'=>array('update', 'id'=>$model->lhid)),
	array('label'=>'Delete LocationHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->lhid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LocationHistory', 'url'=>array('admin')),
);
?>

<h1>View LocationHistory #<?php echo $model->lhid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lhid',
		'tgid',
		'uid',
		'lattitude',
		'longitude',
	),
)); ?>

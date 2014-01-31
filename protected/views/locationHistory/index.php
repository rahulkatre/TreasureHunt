<?php
/* @var $this LocationHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Location Histories',
);

$this->menu=array(
	array('label'=>'Create LocationHistory', 'url'=>array('create')),
	array('label'=>'Manage LocationHistory', 'url'=>array('admin')),
);
?>

<h1>Location Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

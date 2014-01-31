<?php
/* @var $this LocationHistoryController */
/* @var $model LocationHistory */

$this->breadcrumbs=array(
	'Location Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LocationHistory', 'url'=>array('index')),
	array('label'=>'Manage LocationHistory', 'url'=>array('admin')),
);
?>

<h1>Create LocationHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
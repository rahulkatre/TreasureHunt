<?php
/* @var $this LocationHistoryController */
/* @var $model LocationHistory */

$this->breadcrumbs=array(
	'Location Histories'=>array('index'),
	$model->lhid=>array('view','id'=>$model->lhid),
	'Update',
);

$this->menu=array(
	array('label'=>'List LocationHistory', 'url'=>array('index')),
	array('label'=>'Create LocationHistory', 'url'=>array('create')),
	array('label'=>'View LocationHistory', 'url'=>array('view', 'id'=>$model->lhid)),
	array('label'=>'Manage LocationHistory', 'url'=>array('admin')),
);
?>

<h1>Update LocationHistory <?php echo $model->lhid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
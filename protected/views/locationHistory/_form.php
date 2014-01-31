<?php
/* @var $this LocationHistoryController */
/* @var $model LocationHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'location-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lhid'); ?>
		<?php echo $form->textField($model,'lhid',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'lhid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgid'); ?>
		<?php echo $form->textField($model,'tgid',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'tgid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lattitude'); ?>
		<?php echo $form->textField($model,'lattitude',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lattitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
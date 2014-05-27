<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'AUT_NOMBRE'); ?>
		<?php echo $form->textField($model,'AUT_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AUT_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'AUT_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AUT_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'AUT_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_APELLIDOMATERNO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
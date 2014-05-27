<?php
/* @var $this EditoresController */
/* @var $model Editores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'editores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PUB_CORREL'); ?>
		<?php echo $form->textField($model,'PUB_CORREL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PUB_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EDI_NOMBRE'); ?>
		<?php echo $form->textField($model,'EDI_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EDI_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EDI_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'EDI_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EDI_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EDI_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'EDI_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EDI_APELLIDOMATERNO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
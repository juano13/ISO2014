<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'investigadores-form',
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
		<?php echo $form->labelEx($model,'INV_NOMBRE'); ?>
		<?php echo $form->textField($model,'INV_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'INV_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INV_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'INV_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'INV_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INV_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'INV_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'INV_APELLIDOMATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INV_ROLE'); ?>
		<?php echo $form->textField($model,'INV_ROLE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'INV_ROLE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
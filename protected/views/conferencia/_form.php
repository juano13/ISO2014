<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conferencia-form',
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
		<?php echo $form->labelEx($model,'CON_NOMBRE'); ?>
		<?php echo $form->textField($model,'CON_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CON_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'CON_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'CON_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_LUGAR'); ?>
		<?php echo $form->textField($model,'CON_LUGAR',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CON_LUGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_FECHAREALIZACION'); ?>
		<?php echo $form->textField($model,'CON_FECHAREALIZACION'); ?>
		<?php echo $form->error($model,'CON_FECHAREALIZACION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
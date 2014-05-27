<?php
/* @var $this OtrosController */
/* @var $model Otros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'otros-form',
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
		<?php echo $form->labelEx($model,'OTR_NOMBRE'); ?>
		<?php echo $form->textField($model,'OTR_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'OTR_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTR_TITULO'); ?>
		<?php echo $form->textField($model,'OTR_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'OTR_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTR_FECHA'); ?>
		<?php echo $form->textField($model,'OTR_FECHA'); ?>
		<?php echo $form->error($model,'OTR_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTR_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'OTR_DESCRIPCION',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'OTR_DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
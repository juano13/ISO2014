<?php
/* @var $this PaperController */
/* @var $model Paper */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paper-form',
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
		<?php echo $form->labelEx($model,'PAP_NOMBRE'); ?>
		<?php echo $form->textField($model,'PAP_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PAP_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAP_TITULO'); ?>
		<?php echo $form->textField($model,'PAP_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PAP_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAP_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'PAP_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'PAP_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAP_OBJETIVO'); ?>
		<?php echo $form->textField($model,'PAP_OBJETIVO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PAP_OBJETIVO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
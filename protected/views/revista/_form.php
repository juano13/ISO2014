<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'revista-form',
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
		<?php echo $form->labelEx($model,'REV_NOMBRE'); ?>
		<?php echo $form->textField($model,'REV_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'REV_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_TITULO'); ?>
		<?php echo $form->textField($model,'REV_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'REV_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'REV_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'REV_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_NUMEROSERIE'); ?>
		<?php echo $form->textField($model,'REV_NUMEROSERIE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'REV_NUMEROSERIE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_VOLUMEN'); ?>
		<?php echo $form->textField($model,'REV_VOLUMEN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'REV_VOLUMEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_FECHAPUBLICACION'); ?>
		<?php echo $form->textField($model,'REV_FECHAPUBLICACION'); ?>
		<?php echo $form->error($model,'REV_FECHAPUBLICACION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
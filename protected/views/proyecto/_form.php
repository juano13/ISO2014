<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'libro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	 <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PUB_CORREL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PUB_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PRO_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PRO_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PRO_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PRO_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRO_FECHAINGRESO'); ?>
		<?php echo $form->dateField($model,'PRO_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'PRO_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PRO_DESCRIPCION',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'PRO_DESCRIPCION'); ?>
	</div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this PaperController */
/* @var $model Paper */
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
		<?php echo $form->textFieldControlGroup($model,'OTR_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'OTR_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'OTR_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'OTR_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OTR_FECHA'); ?>
		<?php echo $form->dateField($model,'OTR_FECHA'); ?>
		<?php echo $form->error($model,'OTR_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'OTR_DESCRIPCION',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'OTR_DESCRIPCION'); ?>
	</div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
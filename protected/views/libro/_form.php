<?php
/* @var $this LibroController */
/* @var $model Libro */
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
		<?php echo $form->textFieldControlGroup($model,'LIB_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LIB_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'LIB_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'LIB_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LIB_FECHAINGRESO'); ?>
		<?php echo $form->dateField($model,'LIB_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'LIB_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'LIB_EDICION',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LIB_EDICION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LIB_FECHAPUBLICACION'); ?>
		<?php echo $form->dateField($model,'LIB_FECHAPUBLICACION'); ?>
		<?php echo $form->error($model,'LIB_FECHAPUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'LIB_CAPLIBRO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LIB_CAPLIBRO'); ?>
	</div>

 <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
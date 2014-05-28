<?php
/* @var $this RevistaController */
/* @var $model Revista */
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
		<?php echo $form->textFieldControlGroup($model,'REV_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'REV_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'REV_TITULO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'REV_TITULO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_FECHAINGRESO'); ?>
		<?php echo $form->dateField($model,'REV_FECHAINGRESO'); ?>
		<?php echo $form->error($model,'REV_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'REV_NUMEROSERIE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'REV_NUMEROSERIE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'REV_VOLUMEN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'REV_VOLUMEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REV_FECHAPUBLICACION'); ?>
		<?php echo $form->dateField($model,'REV_FECHAPUBLICACION'); ?>
		<?php echo $form->error($model,'REV_FECHAPUBLICACION'); ?>
	</div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
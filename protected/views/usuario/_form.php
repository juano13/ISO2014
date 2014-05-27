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
		<?php echo $form->textFieldControlGroup($model,'USU_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_APELLIDOMATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_EMAIL',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USU_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_FONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'USU_FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_USERNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordFieldControlGroup($model,'USU_PASSWORD',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_ROLE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_ROLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_GRADO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_GRADO'); ?>
	</div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->
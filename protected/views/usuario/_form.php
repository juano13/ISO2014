<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_NOMBRE'); ?>
		<?php echo $form->textField($model,'USU_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'USU_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'USU_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_APELLIDOMATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_EMAIL'); ?>
		<?php echo $form->textField($model,'USU_EMAIL',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_DIRECCION'); ?>
		<?php echo $form->textField($model,'USU_DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USU_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_FONO'); ?>
		<?php echo $form->textField($model,'USU_FONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'USU_FONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_USERNAME'); ?>
		<?php echo $form->textField($model,'USU_USERNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_PASSWORD'); ?>
		<?php echo $form->textField($model,'USU_PASSWORD',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ROLE'); ?>
		<?php echo $form->textField($model,'USU_ROLE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USU_ROLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_GRADO'); ?>
		<?php echo $form->textField($model,'USU_GRADO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_GRADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
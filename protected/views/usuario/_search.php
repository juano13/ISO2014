<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USU_CORREL'); ?>
		<?php echo $form->textField($model,'USU_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_NOMBRE'); ?>
		<?php echo $form->textField($model,'USU_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'USU_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'USU_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_EMAIL'); ?>
		<?php echo $form->textField($model,'USU_EMAIL',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_DIRECCION'); ?>
		<?php echo $form->textField($model,'USU_DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_FONO'); ?>
		<?php echo $form->textField($model,'USU_FONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_USERNAME'); ?>
		<?php echo $form->textField($model,'USU_USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_PASSWORD'); ?>
		<?php echo $form->textField($model,'USU_PASSWORD',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_ROLE'); ?>
		<?php echo $form->textField($model,'USU_ROLE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_GRADO'); ?>
		<?php echo $form->textField($model,'USU_GRADO',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
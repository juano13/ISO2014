<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'INV_CORREL'); ?>
		<?php echo $form->textField($model,'INV_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PUB_CORREL'); ?>
		<?php echo $form->textField($model,'PUB_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INV_NOMBRE'); ?>
		<?php echo $form->textField($model,'INV_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INV_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'INV_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INV_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'INV_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INV_ROLE'); ?>
		<?php echo $form->textField($model,'INV_ROLE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
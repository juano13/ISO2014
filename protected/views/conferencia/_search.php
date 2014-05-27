<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PUB_CORREL'); ?>
		<?php echo $form->textField($model,'PUB_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_NOMBRE'); ?>
		<?php echo $form->textField($model,'CON_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'CON_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_LUGAR'); ?>
		<?php echo $form->textField($model,'CON_LUGAR',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_FECHAREALIZACION'); ?>
		<?php echo $form->textField($model,'CON_FECHAREALIZACION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
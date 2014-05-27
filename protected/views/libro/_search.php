<?php
/* @var $this LibroController */
/* @var $model Libro */
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
		<?php echo $form->label($model,'LIB_NOMBRE'); ?>
		<?php echo $form->textField($model,'LIB_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIB_TITULO'); ?>
		<?php echo $form->textField($model,'LIB_TITULO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIB_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'LIB_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIB_EDICION'); ?>
		<?php echo $form->textField($model,'LIB_EDICION',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIB_FECHAPUBLICACION'); ?>
		<?php echo $form->textField($model,'LIB_FECHAPUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIB_CAPLIBRO'); ?>
		<?php echo $form->textField($model,'LIB_CAPLIBRO',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
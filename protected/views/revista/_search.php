<?php
/* @var $this RevistaController */
/* @var $model Revista */
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
		<?php echo $form->label($model,'REV_NOMBRE'); ?>
		<?php echo $form->textField($model,'REV_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REV_TITULO'); ?>
		<?php echo $form->textField($model,'REV_TITULO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REV_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'REV_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REV_NUMEROSERIE'); ?>
		<?php echo $form->textField($model,'REV_NUMEROSERIE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REV_VOLUMEN'); ?>
		<?php echo $form->textField($model,'REV_VOLUMEN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REV_FECHAPUBLICACION'); ?>
		<?php echo $form->textField($model,'REV_FECHAPUBLICACION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
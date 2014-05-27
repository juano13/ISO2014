<?php
/* @var $this LibroController */
/* @var $model Libro */
/* @var $form CActiveForm */
?>

<div class="wide form">
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'PUB_CORREL'); ?>
		<?php echo $form->textField($model,'PUB_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_NOMBRE'); ?>
		<?php echo $form->textField($model,'PRO_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_TITULO'); ?>
		<?php echo $form->textField($model,'PRO_TITULO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'PRO_FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRO_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'PRO_DESCRIPCION',array('size'=>60,'maxlength'=>500)); ?>
	</div>

   <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
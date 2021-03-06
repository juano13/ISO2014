<?php
/* @var $this PaperController */
/* @var $model Paper */
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
		<?php echo $form->label($model,'OTR_NOMBRE'); ?>
		<?php echo $form->textField($model,'OTR_NOMBRE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OTR_TITULO'); ?>
		<?php echo $form->textField($model,'OTR_TITULO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OTR_FECHA'); ?>
		<?php echo $form->textField($model,'OTR_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OTR_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'OTR_DESCRIPCION',array('size'=>60,'maxlength'=>500)); ?>
	</div>

   <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
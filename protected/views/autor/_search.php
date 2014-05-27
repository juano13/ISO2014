<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="wide form">
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'AUT_CORREL'); ?>
		<?php echo $form->textField($model,'AUT_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AUT_NOMBRE'); ?>
		<?php echo $form->textField($model,'AUT_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AUT_APELLIDOPATERNO'); ?>
		<?php echo $form->textField($model,'AUT_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AUT_APELLIDOMATERNO'); ?>
		<?php echo $form->textField($model,'AUT_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

   <div class="form-actions">
        <?php echo BsHtml::submitButton('Buscar',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
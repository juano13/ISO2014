<?php
/* @var $this AutorController */
/* @var $model Autor */
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
		<?php echo $form->textFieldControlGroup($model,'AUT_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'AUT_APELLIDOPATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_APELLIDOPATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'AUT_APELLIDOMATERNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'AUT_APELLIDOMATERNO'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'AUT_CORREL') ?>
		<?php 

		$models = Autor::model()->findAll(); 
		$data = array(); 
		
		foreach ($models as $model1) 
			$data[$model1->AUT_CORREL] = $model1->AUT_NOMBRE . ' - '. $model1->AUT_APELLIDOPATERNO . ' '. $model1->AUT_APELLIDOMATERNO; 
		echo $form->dropDownList($model, 'AUT_CORREL', $data ,array('prompt' => 'Seleccione')); ?>


	  <?php //echo $form->dropDownListControlGroup($model,'AUT_CORREL',CHtml::listData(Autor::model()->findAll(),'AUT_CORREL','AUT_NOMBRE','AUT_APELLIDOPATERNO'), array('empty' => 'Seleccione Autor')); ?>
	</div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->
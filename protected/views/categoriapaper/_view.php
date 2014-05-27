<?php
/* @var $this CategoriapaperController */
/* @var $data Categoriapaper */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATP_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CATP_CORREL), array('view', 'id'=>$data->CATP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CATP_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATP_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->CATP_DESCRIPCION); ?>
	<br />


</div>
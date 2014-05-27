<?php
/* @var $this OtrosController */
/* @var $data Otros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OTR_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->OTR_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OTR_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->OTR_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OTR_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->OTR_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OTR_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->OTR_DESCRIPCION); ?>
	<br />


</div>
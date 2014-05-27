<?php
/* @var $this ConferenciaController */
/* @var $data Conferencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CON_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->CON_FECHAINGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_LUGAR')); ?>:</b>
	<?php echo CHtml::encode($data->CON_LUGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_FECHAREALIZACION')); ?>:</b>
	<?php echo CHtml::encode($data->CON_FECHAREALIZACION); ?>
	<br />


</div>
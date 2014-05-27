<?php
/* @var $this InvestigadoresController */
/* @var $data Investigadores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INV_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INV_CORREL), array('view', 'id'=>$data->INV_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INV_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->INV_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INV_APELLIDOPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->INV_APELLIDOPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INV_APELLIDOMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->INV_APELLIDOMATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INV_ROLE')); ?>:</b>
	<?php echo CHtml::encode($data->INV_ROLE); ?>
	<br />


</div>
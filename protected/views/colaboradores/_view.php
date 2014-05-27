<?php
/* @var $this ColaboradoresController */
/* @var $data Colaboradores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COL_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COL_CORREL), array('view', 'id'=>$data->COL_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COL_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->COL_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COL_APELLIDOPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->COL_APELLIDOPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COL_APELLIDOMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->COL_APELLIDOMATERNO); ?>
	<br />


</div>
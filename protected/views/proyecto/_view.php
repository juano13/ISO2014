<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_FECHAINGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_DESCRIPCION); ?>
	<br />


</div>
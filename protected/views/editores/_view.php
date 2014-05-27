<?php
/* @var $this EditoresController */
/* @var $data Editores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDI_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EDI_CORREL), array('view', 'id'=>$data->EDI_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDI_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->EDI_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDI_APELLIDOPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->EDI_APELLIDOPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDI_APELLIDOMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->EDI_APELLIDOMATERNO); ?>
	<br />


</div>
<?php
/* @var $this TesisController */
/* @var $data Tesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TES_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->TES_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TES_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TES_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TES_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->TES_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TES_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->TES_FECHAINGRESO); ?>
	<br />


</div>
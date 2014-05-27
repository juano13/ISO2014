<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IMA_CORREL), array('view', 'id'=>$data->IMA_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_IMAGEN')); ?>:</b>
	<?php echo CHtml::encode($data->IMA_IMAGEN); ?>
	<br />


</div>
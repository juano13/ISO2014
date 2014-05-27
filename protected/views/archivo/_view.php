<?php
/* @var $this ArchivoController */
/* @var $data Archivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARC_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARC_CORREL), array('view', 'id'=>$data->ARC_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARC_FILE')); ?>:</b>
	<?php echo CHtml::encode($data->ARC_FILE); ?>
	<br />


</div>
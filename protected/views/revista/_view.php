<?php
/* @var $this RevistaController */
/* @var $data Revista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->REV_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->REV_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->REV_FECHAINGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_NUMEROSERIE')); ?>:</b>
	<?php echo CHtml::encode($data->REV_NUMEROSERIE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_VOLUMEN')); ?>:</b>
	<?php echo CHtml::encode($data->REV_VOLUMEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REV_FECHAPUBLICACION')); ?>:</b>
	<?php echo CHtml::encode($data->REV_FECHAPUBLICACION); ?>
	<br />


</div>
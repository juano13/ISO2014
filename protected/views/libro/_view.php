<?php
/* @var $this LibroController */
/* @var $data Libro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_FECHAINGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_EDICION')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_EDICION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_FECHAPUBLICACION')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_FECHAPUBLICACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LIB_CAPLIBRO')); ?>:</b>
	<?php echo CHtml::encode($data->LIB_CAPLIBRO); ?>
	<br />


</div>
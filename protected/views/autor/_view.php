<?php
/* @var $this AutorController */
/* @var $data Autor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUT_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AUT_CORREL), array('view', 'id'=>$data->AUT_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUT_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->AUT_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUT_APELLIDOPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->AUT_APELLIDOPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUT_APELLIDOMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->AUT_APELLIDOMATERNO); ?>
	<br />


</div>
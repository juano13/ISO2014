<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USU_CORREL), array('view', 'id'=>$data->USU_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->USU_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_APELLIDOPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_APELLIDOPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_APELLIDOMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_APELLIDOMATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->USU_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->USU_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_FONO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_FONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USU_USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USU_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ROLE')); ?>:</b>
	<?php echo CHtml::encode($data->USU_ROLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_GRADO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_GRADO); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this CategoriarevistasController */
/* @var $data Categoriarevistas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CAT_CORREL), array('view', 'id'=>$data->CAT_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PUB_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CAT_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAT_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->CAT_DESCRIPCION); ?>
	<br />


</div>
<?php
/* @var $this PublicacionController */
/* @var $data Publicacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->USU_CORREL); ?>
	<br />


</div>
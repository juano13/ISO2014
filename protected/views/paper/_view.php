<?php
/* @var $this PaperController */
/* @var $data Paper */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PUB_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PUB_CORREL), array('view', 'id'=>$data->PUB_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PAP_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAP_TITULO')); ?>:</b>
	<?php echo CHtml::encode($data->PAP_TITULO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAP_FECHAINGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->PAP_FECHAINGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAP_OBJETIVO')); ?>:</b>
	<?php echo CHtml::encode($data->PAP_OBJETIVO); ?>
	<br />


</div>
<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */

$this->breadcrumbs=array(
	'Investigadores'=>array('index'),
	$model->INV_CORREL,
);

$this->menu=array(
	array('label'=>'List Investigadores', 'url'=>array('index')),
	array('label'=>'Create Investigadores', 'url'=>array('create')),
	array('label'=>'Update Investigadores', 'url'=>array('update', 'id'=>$model->INV_CORREL)),
	array('label'=>'Delete Investigadores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->INV_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Investigadores', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Investigador',$model->INV_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'INV_CORREL',
		'INV_NOMBRE',
		'INV_APELLIDOPATERNO',
		'INV_APELLIDOMATERNO',
		'INV_ROLE',
	),
)); ?>

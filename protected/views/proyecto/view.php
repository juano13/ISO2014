<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'Update Proyecto', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>View Proyecto #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'PRO_NOMBRE',
		'PRO_TITULO',
		'PRO_FECHAINGRESO',
		'PRO_DESCRIPCION',
	),
)); ?>

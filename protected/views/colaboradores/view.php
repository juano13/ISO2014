<?php
/* @var $this ColaboradoresController */
/* @var $model Colaboradores */

$this->breadcrumbs=array(
	'Colaboradores'=>array('index'),
	$model->COL_CORREL,
);

$this->menu=array(
	array('label'=>'List Colaboradores', 'url'=>array('index')),
	array('label'=>'Create Colaboradores', 'url'=>array('create')),
	array('label'=>'Update Colaboradores', 'url'=>array('update', 'id'=>$model->COL_CORREL)),
	array('label'=>'Delete Colaboradores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COL_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Colaboradores', 'url'=>array('admin')),
);
?>

<h1>View Colaboradores #<?php echo $model->COL_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COL_CORREL',
		'COL_NOMBRE',
		'COL_APELLIDOPATERNO',
		'COL_APELLIDOMATERNO',
	),
)); ?>

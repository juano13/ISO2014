<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Conferencias'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Conferencia', 'url'=>array('index')),
	array('label'=>'Create Conferencia', 'url'=>array('create')),
	array('label'=>'Update Conferencia', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Conferencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conferencia', 'url'=>array('admin')),
);
?>

<h1>View Conferencia #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'CON_NOMBRE',
		'CON_FECHAINGRESO',
		'CON_LUGAR',
		'CON_FECHAREALIZACION',
	),
)); ?>

<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Create Tesis', 'url'=>array('create')),
	array('label'=>'Update Tesis', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Tesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>View Tesis #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'TES_DESCRIPCION',
		'TES_NOMBRE',
		'TES_TITULO',
		'TES_FECHAINGRESO',
	),
)); ?>

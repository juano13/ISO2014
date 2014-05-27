<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Otroses'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Otros', 'url'=>array('index')),
	array('label'=>'Create Otros', 'url'=>array('create')),
	array('label'=>'Update Otros', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Otros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Otros', 'url'=>array('admin')),
);
?>

<h1>View Otros #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'OTR_NOMBRE',
		'OTR_TITULO',
		'OTR_FECHA',
		'OTR_DESCRIPCION',
	),
)); ?>

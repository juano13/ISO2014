<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Revista', 'url'=>array('index')),
	array('label'=>'Create Revista', 'url'=>array('create')),
	array('label'=>'Update Revista', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Revista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Revista', 'url'=>array('admin')),
);
?>

<h1>View Revista #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'REV_NOMBRE',
		'REV_TITULO',
		'REV_FECHAINGRESO',
		'REV_NUMEROSERIE',
		'REV_VOLUMEN',
		'REV_FECHAPUBLICACION',
	),
)); ?>

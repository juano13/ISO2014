<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Libro', 'url'=>array('index')),
	array('label'=>'Create Libro', 'url'=>array('create')),
	array('label'=>'Update Libro', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Libro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Libro', 'url'=>array('admin')),
);
?>

<h1>View Libro #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'LIB_NOMBRE',
		'LIB_TITULO',
		'LIB_FECHAINGRESO',
		'LIB_EDICION',
		'LIB_FECHAPUBLICACION',
		'LIB_CAPLIBRO',
	),
)); ?>

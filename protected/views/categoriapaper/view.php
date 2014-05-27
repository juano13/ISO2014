<?php
/* @var $this CategoriapaperController */
/* @var $model Categoriapaper */

$this->breadcrumbs=array(
	'Categoriapapers'=>array('index'),
	$model->CATP_CORREL,
);

$this->menu=array(
	array('label'=>'List Categoriapaper', 'url'=>array('index')),
	array('label'=>'Create Categoriapaper', 'url'=>array('create')),
	array('label'=>'Update Categoriapaper', 'url'=>array('update', 'id'=>$model->CATP_CORREL)),
	array('label'=>'Delete Categoriapaper', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CATP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoriapaper', 'url'=>array('admin')),
);
?>

<h1>View Categoriapaper #<?php echo $model->CATP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CATP_CORREL',
		'PUB_CORREL',
		'CATP_NOMBRE',
		'CATP_DESCRIPCION',
	),
)); ?>

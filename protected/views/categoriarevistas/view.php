<?php
/* @var $this CategoriarevistasController */
/* @var $model Categoriarevistas */

$this->breadcrumbs=array(
	'Categoriarevistases'=>array('index'),
	$model->CAT_CORREL,
);

$this->menu=array(
	array('label'=>'List Categoriarevistas', 'url'=>array('index')),
	array('label'=>'Create Categoriarevistas', 'url'=>array('create')),
	array('label'=>'Update Categoriarevistas', 'url'=>array('update', 'id'=>$model->CAT_CORREL)),
	array('label'=>'Delete Categoriarevistas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CAT_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoriarevistas', 'url'=>array('admin')),
);
?>

<h1>View Categoriarevistas #<?php echo $model->CAT_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CAT_CORREL',
		'PUB_CORREL',
		'CAT_NOMBRE',
		'CAT_DESCRIPCION',
	),
)); ?>

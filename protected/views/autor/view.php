<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->AUT_CORREL,
);

$this->menu=array(
	array('label'=>'List Autor', 'url'=>array('index')),
	array('label'=>'Create Autor', 'url'=>array('create')),
	array('label'=>'Update Autor', 'url'=>array('update', 'id'=>$model->AUT_CORREL)),
	array('label'=>'Delete Autor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AUT_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Autor', 'url'=>array('admin')),
);
?>

<h1>View Autor #<?php echo $model->AUT_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AUT_CORREL',
		'AUT_NOMBRE',
		'AUT_APELLIDOPATERNO',
		'AUT_APELLIDOMATERNO',
	),
)); ?>

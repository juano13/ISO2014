<?php
/* @var $this EditoresController */
/* @var $model Editores */

$this->breadcrumbs=array(
	'Editores'=>array('index'),
	$model->EDI_CORREL,
);

$this->menu=array(
	array('label'=>'List Editores', 'url'=>array('index')),
	array('label'=>'Create Editores', 'url'=>array('create')),
	array('label'=>'Update Editores', 'url'=>array('update', 'id'=>$model->EDI_CORREL)),
	array('label'=>'Delete Editores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EDI_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Editores', 'url'=>array('admin')),
);
?>

<h1>View Editores #<?php echo $model->EDI_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EDI_CORREL',
		'PUB_CORREL',
		'EDI_NOMBRE',
		'EDI_APELLIDOPATERNO',
		'EDI_APELLIDOMATERNO',
	),
)); ?>

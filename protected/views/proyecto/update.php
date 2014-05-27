<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->PUB_CORREL=>array('view','id'=>$model->PUB_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'View Proyecto', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>Update Proyecto <?php echo $model->PUB_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
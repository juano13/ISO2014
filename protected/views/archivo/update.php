<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->ARC_CORREL=>array('view','id'=>$model->ARC_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Archivo', 'url'=>array('index')),
	array('label'=>'Create Archivo', 'url'=>array('create')),
	array('label'=>'View Archivo', 'url'=>array('view', 'id'=>$model->ARC_CORREL)),
	array('label'=>'Manage Archivo', 'url'=>array('admin')),
);
?>

<h1>Update Archivo <?php echo $model->ARC_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
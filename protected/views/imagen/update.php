<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->IMA_CORREL=>array('view','id'=>$model->IMA_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'View Imagen', 'url'=>array('view', 'id'=>$model->IMA_CORREL)),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>Update Imagen <?php echo $model->IMA_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
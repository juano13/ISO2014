<?php
/* @var $this ColaboradoresController */
/* @var $model Colaboradores */

$this->breadcrumbs=array(
	'Colaboradores'=>array('index'),
	$model->COL_CORREL=>array('view','id'=>$model->COL_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Colaboradores', 'url'=>array('index')),
	array('label'=>'Create Colaboradores', 'url'=>array('create')),
	array('label'=>'View Colaboradores', 'url'=>array('view', 'id'=>$model->COL_CORREL)),
	array('label'=>'Manage Colaboradores', 'url'=>array('admin')),
);
?>

<h1>Update Colaboradores <?php echo $model->COL_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
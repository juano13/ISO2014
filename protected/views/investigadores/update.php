<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */

$this->breadcrumbs=array(
	'Investigadores'=>array('index'),
	$model->INV_CORREL=>array('view','id'=>$model->INV_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Investigadores', 'url'=>array('index')),
	array('label'=>'Create Investigadores', 'url'=>array('create')),
	array('label'=>'View Investigadores', 'url'=>array('view', 'id'=>$model->INV_CORREL)),
	array('label'=>'Manage Investigadores', 'url'=>array('admin')),
);
?>

<h1>Update Investigadores <?php echo $model->INV_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
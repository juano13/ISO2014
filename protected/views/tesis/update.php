<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	$model->PUB_CORREL=>array('view','id'=>$model->PUB_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Create Tesis', 'url'=>array('create')),
	array('label'=>'View Tesis', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>Update Tesis <?php echo $model->PUB_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
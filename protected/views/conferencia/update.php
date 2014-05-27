<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Conferencias'=>array('index'),
	$model->PUB_CORREL=>array('view','id'=>$model->PUB_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conferencia', 'url'=>array('index')),
	array('label'=>'Create Conferencia', 'url'=>array('create')),
	array('label'=>'View Conferencia', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Manage Conferencia', 'url'=>array('admin')),
);
?>

<h1>Update Conferencia <?php echo $model->PUB_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Otroses'=>array('index'),
	$model->PUB_CORREL=>array('view','id'=>$model->PUB_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Otros', 'url'=>array('index')),
	array('label'=>'Create Otros', 'url'=>array('create')),
	array('label'=>'View Otros', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Manage Otros', 'url'=>array('admin')),
);
?>

<h1>Update Otros <?php echo $model->PUB_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
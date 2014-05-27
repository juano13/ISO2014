<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	$model->PUB_CORREL=>array('view','id'=>$model->PUB_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Revista', 'url'=>array('index')),
	array('label'=>'Create Revista', 'url'=>array('create')),
	array('label'=>'View Revista', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Manage Revista', 'url'=>array('admin')),
);
?>

<h1>Update Revista <?php echo $model->PUB_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
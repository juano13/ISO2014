<?php
/* @var $this EditoresController */
/* @var $model Editores */

$this->breadcrumbs=array(
	'Editores'=>array('index'),
	$model->EDI_CORREL=>array('view','id'=>$model->EDI_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Editores', 'url'=>array('index')),
	array('label'=>'Create Editores', 'url'=>array('create')),
	array('label'=>'View Editores', 'url'=>array('view', 'id'=>$model->EDI_CORREL)),
	array('label'=>'Manage Editores', 'url'=>array('admin')),
);
?>

<h1>Update Editores <?php echo $model->EDI_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
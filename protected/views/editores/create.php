<?php
/* @var $this EditoresController */
/* @var $model Editores */

$this->breadcrumbs=array(
	'Editores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Editores', 'url'=>array('index')),
	array('label'=>'Manage Editores', 'url'=>array('admin')),
);
?>

<h1>Create Editores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
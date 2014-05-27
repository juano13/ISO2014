<?php
/* @var $this ColaboradoresController */
/* @var $model Colaboradores */

$this->breadcrumbs=array(
	'Colaboradores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Colaboradores', 'url'=>array('index')),
	array('label'=>'Manage Colaboradores', 'url'=>array('admin')),
);
?>

<h1>Create Colaboradores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
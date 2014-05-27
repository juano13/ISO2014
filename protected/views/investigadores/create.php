<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */

$this->breadcrumbs=array(
	'Investigadores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Investigadores', 'url'=>array('index')),
	array('label'=>'Manage Investigadores', 'url'=>array('admin')),
);
?>

<h1>Create Investigadores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
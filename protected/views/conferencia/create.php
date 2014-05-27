<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Conferencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conferencia', 'url'=>array('index')),
	array('label'=>'Manage Conferencia', 'url'=>array('admin')),
);
?>

<h1>Create Conferencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
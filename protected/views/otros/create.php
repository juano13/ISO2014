<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Otroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Otros', 'url'=>array('index')),
	array('label'=>'Manage Otros', 'url'=>array('admin')),
);
?>

<h1>Create Otros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
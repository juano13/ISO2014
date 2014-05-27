<?php
/* @var $this CategoriarevistasController */
/* @var $model Categoriarevistas */

$this->breadcrumbs=array(
	'Categoriarevistases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categoriarevistas', 'url'=>array('index')),
	array('label'=>'Manage Categoriarevistas', 'url'=>array('admin')),
);
?>

<h1>Create Categoriarevistas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
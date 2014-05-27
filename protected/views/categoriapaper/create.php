<?php
/* @var $this CategoriapaperController */
/* @var $model Categoriapaper */

$this->breadcrumbs=array(
	'Categoriapapers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categoriapaper', 'url'=>array('index')),
	array('label'=>'Manage Categoriapaper', 'url'=>array('admin')),
);
?>

<h1>Create Categoriapaper</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
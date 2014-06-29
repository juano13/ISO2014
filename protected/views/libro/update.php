<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Libros'=>array('admin'),
	$model->LIB_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Libro',$model->LIB_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
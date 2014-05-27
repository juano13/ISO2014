<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Proyecto'=>array('admin'),
	$model->PRO_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);

$this->menu=array(
		array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Proyecto',$model->PRO_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
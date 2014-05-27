<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Revista'=>array('admin'),
	$model->REV_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Revista',$model->REV_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
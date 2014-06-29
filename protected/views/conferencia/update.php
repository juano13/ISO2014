<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Conferencia'=>array('admin'),
	$model->CON_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);
$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Conferencia',$model->CON_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
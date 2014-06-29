<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Tesis'=>array('admin'),
	$model->TES_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Tesis',$model->TES_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
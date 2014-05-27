<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Otra publicacion'=>array('admin'),
	$model->OTR_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Otra publicacion',$model->OTR_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
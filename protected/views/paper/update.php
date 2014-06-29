<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Paper'=>array('admin'),
	$model->PAP_NOMBRE=>array('view','id'=>$model->PUB_CORREL),
	'Editar'
);

$this->menu=array(
array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->PUB_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Paper',$model->PAP_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
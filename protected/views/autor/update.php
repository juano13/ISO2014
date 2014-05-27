<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autor'=>array('admin'),
	$model->AUT_NOMBRE=>array('view','id'=>$model->AUT_CORREL),
	'Editar'
);

$this->menu=array(
array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->AUT_CORREL)),
);
?>

<?php echo BsHtml::pageHeader('Editar Autor',$model->AUT_NOMBRE) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
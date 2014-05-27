<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Otros'=>array('admin'),
	'Agregar Otras Publicaciones'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Otras Publicaciones') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
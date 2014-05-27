<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Proyectos'=>array('admin'),
	'Agregar Proyectos'
);

<?php echo BsHtml::pageHeader('Agregar','Proyectos') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
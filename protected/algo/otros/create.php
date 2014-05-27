<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Otros'=>array('admin'),
	'Agregar Otros'
);

<?php echo BsHtml::pageHeader('Agregar','Otros') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
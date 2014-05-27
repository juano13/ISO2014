<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Conferencia'=>array('admin'),
	'Agregar Conferencia'
);

<?php echo BsHtml::pageHeader('Agregar','Conferencia') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
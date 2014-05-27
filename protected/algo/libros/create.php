<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Libros'=>array('admin'),
	'Agregar Libro'
);

<?php echo BsHtml::pageHeader('Agregar','Libro') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
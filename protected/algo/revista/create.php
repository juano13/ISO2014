<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Revista'=>array('admin'),
	'Agregar Revista'
);

<?php echo BsHtml::pageHeader('Agregar','Revista') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Paper'=>array('admin'),
	'Agregar Paper'
);

<?php echo BsHtml::pageHeader('Agregar','Paper') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
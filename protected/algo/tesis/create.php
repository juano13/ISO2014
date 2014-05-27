<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('index'),
	'Tesis'=>array('admin'),
	'Agregar Tesis'
);

<?php echo BsHtml::pageHeader('Agregar','Tesis') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
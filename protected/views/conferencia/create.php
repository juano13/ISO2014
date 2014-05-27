<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Conferencia'=>array('admin'),
	'Agregar Conferencia'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Conferencia') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
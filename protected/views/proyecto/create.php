<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Proyecto'=>array('admin'),
	'Agregar Proyecto'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Proyecto') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
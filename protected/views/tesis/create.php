<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Tesis'=>array('admin'),
	'Agregar Tesis'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Agregar','Tesis') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
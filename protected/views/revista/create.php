<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Revista'=>array('admin'),
	'Agregar Revista'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Agregar','Revista') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
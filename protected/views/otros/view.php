<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Otra publicacione'=>array('admin'),
	$model->OTR_NOMBRE,
);
$this->menu=array(
	array('label'=>'Editar publicacion', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar publicacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver otra publicacion',$model->OTR_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'OTR_NOMBRE',
		'OTR_TITULO',
		'OTR_FECHA',
		'OTR_DESCRIPCION',
	),
)); ?>

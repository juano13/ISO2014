<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Conferencia'=>array('admin'),
	$model->CON_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Conferencia', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Conferencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Conferencia',$model->CON_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'CON_NOMBRE',
		'CON_FECHAINGRESO',
		'CON_LUGAR',
		'CON_FECHAREALIZACION',
	),
)); ?>

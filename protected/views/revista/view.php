<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Revista'=>array('admin'),
	$model->REV_NOMBRE,
);


$this->menu=array(
	array('label'=>'Editar Revista', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Revista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Revista',$model->REV_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'REV_NOMBRE',
		'REV_TITULO',
		'REV_FECHAINGRESO',
		'REV_NUMEROSERIE',
		'REV_VOLUMEN',
		'REV_FECHAPUBLICACION',
	),
)); ?>

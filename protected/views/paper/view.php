<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Paper'=>array('admin'),
	$model->PAP_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Paper', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Paper', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Paper',$model->PAP_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'PAP_NOMBRE',
		'PAP_TITULO',
		'PAP_FECHAINGRESO',
		'PAP_OBJETIVO',
	),
)); ?>

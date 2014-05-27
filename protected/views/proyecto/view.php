<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Proyecto'=>array('admin'),
	$model->PRO_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Proyecto', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Proyecto',$model->PRO_NOMBRE) ?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'PRO_NOMBRE',
		'PRO_TITULO',
		'PRO_FECHAINGRESO',
		'PRO_DESCRIPCION',
	),
)); ?>

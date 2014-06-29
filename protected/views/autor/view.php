<?php
/* @var $this AutorController */
/* @var $model Autor */
$this->breadcrumbs=array(
	'Autor'=>array('admin'),
	$model->AUT_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Autor', 'url'=>array('update', 'id'=>$model->AUT_CORREL)),
	array('label'=>'Borrar Autor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AUT_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Autor',$model->AUT_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AUT_CORREL',
		'AUT_NOMBRE',
		'AUT_APELLIDOPATERNO',
		'AUT_APELLIDOMATERNO',
	),
)); ?>


<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Tesis'=>array('admin'),
	$model->TES_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Tesis', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Tesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Ver Libro',$model->TES_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'TES_DESCRIPCION',
		'TES_NOMBRE',
		'TES_TITULO',
		'TES_FECHAINGRESO',
	),
)); ?>

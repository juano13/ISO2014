
<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Libros'=>array('admin'),
	$model->LIB_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Libro', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Libro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Agregar Autor', 'url'=>array('//Autor/create', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Atras', 'url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Ver Libro',$model->LIB_NOMBRE) ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'LIB_NOMBRE',
		'LIB_TITULO',
		'LIB_FECHAINGRESO',
		'LIB_EDICION',
		'LIB_FECHAPUBLICACION',
		'LIB_CAPLIBRO',
	),
));


if(AutorHasPublicacion::model()->findByAttributes(array('PUB_CORREL'=>$model->PUB_CORREL))) {

	$var=new Autor;
	echo "<h3>Autores</h3>";
	//foreach ($var as $value) {

	$var=Autor::model()->findAll(AutorHasPublicacion::model()->findByAttributes(array(
		'PUB_CORREL'=>$model->PUB_CORREL))->AUT_CORREL);

	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$var,
		'attributes'=>array(
			array('name'=>'',
			'value'=>"$var->AUT_NOMBRE $var->AUT_APELLIDOPATERNO $var->AUT_APELLIDOMATERNO"),
	),
	));
	//}
}
 ?>
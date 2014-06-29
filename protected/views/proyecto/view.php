<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Proyecto'=>array('admin'),
	$model->PRO_NOMBRE,
);

$this->menu=array(
	array('label'=>'Editar Proyecto', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Borrar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Estas seguro de borrar esta publicacion?')),
	array('label'=>'Agregar Autor', 'url'=>array('//Autor/create', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Agregar Colaborador', 'url'=>array('//Colaboradores/create', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Agregar Investigador', 'url'=>array('//Investigadores/create', 'id'=>$model->PUB_CORREL)),
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
));
if(AutorHasPublicacion::model()->findByAttributes(array('PUB_CORREL'=>$model->PUB_CORREL))) {

	$var=new Autor;
	echo "<h3>Autores</h3>";
	//foreach ($var as $value) {

	$var=Autor::model()->findByPk(AutorHasPublicacion::model()->findByAttributes(array(
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
if(ProyectoHasColaboradores::model()->findByAttributes(array('PUB_CORREL'=>$model->PUB_CORREL))) {

	$var=new Colaboradores;
	echo "<h3>Colaboradores</h3>";
	//foreach ($var as $value) {

	$var=Colaboradores::model()->findByPk(ProyectoHasColaboradores::model()->findByAttributes(array(
		'PUB_CORREL'=>$model->PUB_CORREL))->COL_CORREL);

	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$var,
		'attributes'=>array(
			array('name'=>'',
			'value'=>"$var->COL_NOMBRE $var->COL_APELLIDOPATERNO $var->COL_APELLIDOMATERNO"),
	),
	));
	//}
}

if(ProyectoHasInvestigadores::model()->findByAttributes(array('PUB_CORREL'=>$model->PUB_CORREL))) {

	$var=new Investigadores;
	echo "<h3>Investigadores</h3>";
	//foreach ($var as $value) {

	$var=Investigadores::model()->findByPk(ProyectoHasInvestigadores::model()->findByAttributes(array(
		'PUB_CORREL'=>$model->PUB_CORREL))->INV_CORREL);

	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$var,
		'attributes'=>array(
			array('name'=>'',
			'value'=>"$var->INV_NOMBRE $var->INV_APELLIDOPATERNO $var->INV_APELLIDOMATERNO"),
	),
	));
	//}
}
 ?>
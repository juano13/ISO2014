<?php
/* @var $this ColaboradoresController */
/* @var $model Colaboradores */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//Publicacion/admin'),
	'Proyecto'=>array('//Proyecto/admin'),
	'Agregar Colaborador',
	Proyecto::model()->PRO_NOMBRE,
	//Proyecto::model()->findByPk($model->PRO_CORREL)->PRO_NOMBRE=>array('//Proyecto/view/','id'=>$model->PRO_CORREL),
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('//Proyecto/admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Colaborador') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
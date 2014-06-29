<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Proyecto'=>array('//Proyecto/admin'),
	'Agregar Investigador'
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('//Proyecto/admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Investigador') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
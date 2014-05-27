<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('Admin'),
	'Crear Usuario',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Usuario') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
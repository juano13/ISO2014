
<?php
$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Libros'=>array('admin'),
	'Agregar Libro'
);
$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Libro') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
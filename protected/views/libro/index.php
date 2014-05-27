<?php
/* @var $this LibroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Libros',
);

$this->menu=array(
	array('label'=>'Create Libro', 'url'=>array('create')),
	array('label'=>'Manage Libro', 'url'=>array('admin')),
);
?>

<h1>Libros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

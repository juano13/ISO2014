<?php
/* @var $this CategoriarevistasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoriarevistases',
);

$this->menu=array(
	array('label'=>'Create Categoriarevistas', 'url'=>array('create')),
	array('label'=>'Manage Categoriarevistas', 'url'=>array('admin')),
);
?>

<h1>Categoriarevistases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

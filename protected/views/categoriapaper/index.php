<?php
/* @var $this CategoriapaperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoriapapers',
);

$this->menu=array(
	array('label'=>'Create Categoriapaper', 'url'=>array('create')),
	array('label'=>'Manage Categoriapaper', 'url'=>array('admin')),
);
?>

<h1>Categoriapapers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

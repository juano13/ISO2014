<?php
/* @var $this CategoriapaperController */
/* @var $model Categoriapaper */

$this->breadcrumbs=array(
	'Categoriapapers'=>array('index'),
	$model->CATP_CORREL=>array('view','id'=>$model->CATP_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoriapaper', 'url'=>array('index')),
	array('label'=>'Create Categoriapaper', 'url'=>array('create')),
	array('label'=>'View Categoriapaper', 'url'=>array('view', 'id'=>$model->CATP_CORREL)),
	array('label'=>'Manage Categoriapaper', 'url'=>array('admin')),
);
?>

<h1>Update Categoriapaper <?php echo $model->CATP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
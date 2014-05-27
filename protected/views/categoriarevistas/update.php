<?php
/* @var $this CategoriarevistasController */
/* @var $model Categoriarevistas */

$this->breadcrumbs=array(
	'Categoriarevistases'=>array('index'),
	$model->CAT_CORREL=>array('view','id'=>$model->CAT_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoriarevistas', 'url'=>array('index')),
	array('label'=>'Create Categoriarevistas', 'url'=>array('create')),
	array('label'=>'View Categoriarevistas', 'url'=>array('view', 'id'=>$model->CAT_CORREL)),
	array('label'=>'Manage Categoriarevistas', 'url'=>array('admin')),
);
?>

<h1>Update Categoriarevistas <?php echo $model->CAT_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
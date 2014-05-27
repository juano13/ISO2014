<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'Papers'=>array('index'),
	$model->PUB_CORREL,
);

$this->menu=array(
	array('label'=>'List Paper', 'url'=>array('index')),
	array('label'=>'Create Paper', 'url'=>array('create')),
	array('label'=>'Update Paper', 'url'=>array('update', 'id'=>$model->PUB_CORREL)),
	array('label'=>'Delete Paper', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PUB_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paper', 'url'=>array('admin')),
);
?>

<h1>View Paper #<?php echo $model->PUB_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PUB_CORREL',
		'PAP_NOMBRE',
		'PAP_TITULO',
		'PAP_FECHAINGRESO',
		'PAP_OBJETIVO',
	),
)); ?>

<?php
/* @var $this ColaboradoresController */
/* @var $model Colaboradores */

$this->breadcrumbs=array(
	'Colaboradores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Colaboradores', 'url'=>array('index')),
	array('label'=>'Create Colaboradores', 'url'=>array('create')),
);
?>

<h1>Manage Colaboradores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'colaboradores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COL_CORREL',
		'COL_NOMBRE',
		'COL_APELLIDOPATERNO',
		'COL_APELLIDOMATERNO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->USU_CORREL,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->USU_CORREL)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USU_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->USU_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USU_CORREL',
		'USU_NOMBRE',
		'USU_APELLIDOPATERNO',
		'USU_APELLIDOMATERNO',
		'USU_EMAIL',
		'USU_DIRECCION',
		'USU_FONO',
		'USU_USERNAME',
		'USU_PASSWORD',
		'USU_ROLE',
		'USU_GRADO',
	),
)); ?>

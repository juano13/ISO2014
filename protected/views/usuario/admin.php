<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'
);

$this->menu=array(
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

?>
<?php echo BsHtml::pageHeader('Administrar','Paper') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USU_CORREL',
		'USU_NOMBRE',
		'USU_APELLIDOPATERNO',
		'USU_APELLIDOMATERNO',
		'USU_EMAIL',
		'USU_DIRECCION',
		/*
		'USU_FONO',
		'USU_USERNAME',
		'USU_PASSWORD',
		'USU_ROLE',
		'USU_GRADO',
		*/
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
<?php
/* @var $this ConferenciaController */
/* @var $model Conferencia */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Conferencia',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Conferencia', 'url'=>array('create')),
);

?>

<?php echo BsHtml::pageHeader('Administrar','Conferencia') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
	'columns'=>array(
		'PUB_CORREL',
		'CON_NOMBRE',
		'CON_FECHAINGRESO',
		'CON_LUGAR',
		'CON_FECHAREALIZACION',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>



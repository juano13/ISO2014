<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Proyecto',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Proyecto', 'url'=>array('create')),
);
?>
<?php echo BsHtml::pageHeader('Administrar','Proyectos') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
		'columns'=>array(
		'PUB_CORREL',
		'PRO_NOMBRE',
		'PRO_TITULO',
		'PRO_FECHAINGRESO',
		'PRO_DESCRIPCION',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>

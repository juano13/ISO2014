<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Revista',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Revista', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Revista') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
		'PUB_CORREL',
		'REV_NOMBRE',
		'REV_TITULO',
		'REV_FECHAINGRESO',
		'REV_NUMEROSERIE',
		'REV_VOLUMEN',
		/*
		'REV_FECHAPUBLICACION',
		*/
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>



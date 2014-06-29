<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Otras publicaciones',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Otros', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Otras publicaciones') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
	'columns'=>array(
		'PUB_CORREL',
		'OTR_NOMBRE',
		'OTR_TITULO',
		'OTR_FECHA',
		'OTR_DESCRIPCION',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>

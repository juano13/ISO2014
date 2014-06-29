<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */


$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Tesis',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Tesis', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Tesis') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
		'PUB_CORREL',
		'TES_DESCRIPCION',
		'TES_NOMBRE',
		'TES_TITULO',
		'TES_FECHAINGRESO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>


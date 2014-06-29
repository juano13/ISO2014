<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/admin'),
	'Paper',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Paper', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Paper') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'beneficio-social-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
	'columns'=>array(
		'PUB_CORREL',
		'PAP_NOMBRE',
		'PAP_TITULO',
		'PAP_FECHAINGRESO',
		'PAP_OBJETIVO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>



<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autor',
);
?>
<?php echo BsHtml::pageHeader('Administrar','Autor') ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'autor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'AUT_CORREL',
		'AUT_NOMBRE',
		'AUT_APELLIDOPATERNO',
		'AUT_APELLIDOMATERNO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>


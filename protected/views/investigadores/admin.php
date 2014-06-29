<?php
/* @var $this InvestigadoresController */
/* @var $model Investigadores */

$this->breadcrumbs=array(
	'Investigadores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Investigadores', 'url'=>array('index')),
	array('label'=>'Create Investigadores', 'url'=>array('create')),
);
?>

<h1>Manage Investigadores</h1>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'investigadores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'INV_CORREL',
		'INV_NOMBRE',
		'INV_APELLIDOPATERNO',
		'INV_APELLIDOMATERNO',
		'INV_ROLE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Create Tesis', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tesis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tesises</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tesis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PUB_CORREL',
		'TES_DESCRIPCION',
		'TES_NOMBRE',
		'TES_TITULO',
		'TES_FECHAINGRESO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Proyecto',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Proyecto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyecto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo BsHtml::pageHeader('Administrar','Proyectos') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo BsHtml::button('Busqueda avanzada',array('class' =>'search-button', 'icon' => 
        BsHtml::GLYPHICON_SEARCH,'color' => BsHtml::BUTTON_COLOR_PRIMARY), '#'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div>
<?php $this->widget('bootstrap.widgets.BsGridView',array(
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
    </div>
</div>


<?php
/* @var $this OtrosController */
/* @var $model Otros */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Otras publicaciones',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Otros', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#otros-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo BsHtml::pageHeader('Administrar','Otras publicaciones') ?>
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
		'OTR_NOMBRE',
		'OTR_TITULO',
		'OTR_FECHA',
		'OTR_DESCRIPCION',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>


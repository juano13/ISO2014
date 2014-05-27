<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Paper',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Paper', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paper-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo BsHtml::pageHeader('Administrar','Paper') ?>
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
		'PAP_NOMBRE',
		'PAP_TITULO',
		'PAP_FECHAINGRESO',
		'PAP_OBJETIVO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>


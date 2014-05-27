<?php
/* @var $this BeneficioSocialController */
/* @var $model BeneficioSocial */


$this->breadcrumbs=array(
	'Publicaciones'=>array('//publicacion/index'),
	'Tesis',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Tesis', 'url'=>array('create')),
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

<?php echo BsHtml::pageHeader('Administrar','Tesis') ?>
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
        <!-- search-form -->

<?php $this->widget('bootstrap.widgets.BsGridView',array(
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
    </div>
</div>



<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'
);

$this->menu=array(
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
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
        </div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USU_CORREL',
		'USU_NOMBRE',
		'USU_APELLIDOPATERNO',
		'USU_APELLIDOMATERNO',
		'USU_EMAIL',
		'USU_DIRECCION',
		/*
		'USU_FONO',
		'USU_USERNAME',
		'USU_PASSWORD',
		'USU_ROLE',
		'USU_GRADO',
		*/
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>


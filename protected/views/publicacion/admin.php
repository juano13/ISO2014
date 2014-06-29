<?php
/* @var $this PublicacionController */
/* @var $model Publicacion */

$this->breadcrumbs=array(
	'Publicaciones'
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Libros', 'url'=>array('//libro/admin')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Tesis', 'url'=>array('//tesis/admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Revistas', 'url'=>array('//revista/admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Conferencias', 'url'=>array('//conferencia/admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'paper', 'url'=>array('//paper/admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Proyectos', 'url'=>array('//proyecto/admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Otros', 'url'=>array('//otros/admin')),
);
?>
<!--<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#publicacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo BsHtml::pageHeader('Administrar','Publicaciones') ?>
<?php 

$lib=new libro;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'publicacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PUB_CORREL',
		'USU_CORREL',
		//array(
		//	'name'=>'Nombre',
		//	'value'=>libro::model()->findByPk($model->PUB_CORREL)->LIB_NOMBRE,
			//),
		array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
	),
)); 


?>
-->
<?php
/* @var $this PublicacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Publicacions',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Libros', 'url'=>array('//libro/admin')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Tesis', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Revistas', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Conferencias', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'paper', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Proyectos', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Otros', 'url'=>array('admin')),
);
?>

<h1>Publicacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

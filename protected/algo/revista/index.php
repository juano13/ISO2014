<?php
/* @var $this BeneficioSocialController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Publicaciones',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Libros', 'url'=>array('adminLibros')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Tesis', 'url'=>array('adminTesis')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Revistas', 'url'=>array('adminRevistas')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Conferencias', 'url'=>array('adminConferencias')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'paper', 'url'=>array('adminPaper')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Proyectos', 'url'=>array('adminProyectos')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Otros', 'url'=>array('adminOtros')),
);
?>

<?php echo BsHtml::pageHeader('Publicaciones') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
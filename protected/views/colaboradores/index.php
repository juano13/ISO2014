<?php
/* @var $this ColaboradoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Colaboradores',
);

$this->menu=array(
	array('label'=>'Create Colaboradores', 'url'=>array('create')),
	array('label'=>'Manage Colaboradores', 'url'=>array('admin')),
);
?>

<h1>Colaboradores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

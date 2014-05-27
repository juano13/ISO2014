<?php
/* @var $this ConferenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conferencias',
);

$this->menu=array(
	array('label'=>'Create Conferencia', 'url'=>array('create')),
	array('label'=>'Manage Conferencia', 'url'=>array('admin')),
);
?>

<h1>Conferencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

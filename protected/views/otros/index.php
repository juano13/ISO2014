<?php
/* @var $this OtrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Otroses',
);

$this->menu=array(
	array('label'=>'Create Otros', 'url'=>array('create')),
	array('label'=>'Manage Otros', 'url'=>array('admin')),
);
?>

<h1>Otroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

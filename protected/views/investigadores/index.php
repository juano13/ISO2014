<?php
/* @var $this InvestigadoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Investigadores',
);

$this->menu=array(
	array('label'=>'Create Investigadores', 'url'=>array('create')),
	array('label'=>'Manage Investigadores', 'url'=>array('admin')),
);
?>

<h1>Investigadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

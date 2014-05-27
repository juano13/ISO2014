<?php
/* @var $this EditoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Editores',
);

$this->menu=array(
	array('label'=>'Create Editores', 'url'=>array('create')),
	array('label'=>'Manage Editores', 'url'=>array('admin')),
);
?>

<h1>Editores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

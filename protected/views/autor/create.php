<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autor'=>array('admin'),
	'Agregar Autor',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Autor') ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this PiezaController */
/* @var $model Pieza */

$this->breadcrumbs=array(
	'Piezas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pieza', 'url'=>array('index')),
	array('label'=>'Manage Pieza', 'url'=>array('admin')),
);
?>

<h1>Create Pieza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
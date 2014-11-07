<?php
/* @var $this BloqueController */
/* @var $model Bloque */

$this->breadcrumbs=array(
	'Bloques'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bloque', 'url'=>array('index')),
	array('label'=>'Manage Bloque', 'url'=>array('admin')),
);
?>

<h1>Create Bloque</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
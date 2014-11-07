<?php
/* @var $this BloqueNoDisponibleController */
/* @var $model BloqueNoDisponible */

$this->breadcrumbs=array(
	'Bloque No Disponibles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar bloques no disponibles', 'url'=>array('admin')),
);
?>

<h3 align="center">Inhabilitar Bloque en Específico</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
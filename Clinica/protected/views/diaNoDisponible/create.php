<?php
/* @var $this DiaNoDisponibleController */
/* @var $model DiaNoDisponible */

$this->breadcrumbs=array(
	'Dia No Disponibles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar días no disponibles', 'url'=>array('admin')),
);
?>

<h3 align="center">Seleccionar día para bloquear</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
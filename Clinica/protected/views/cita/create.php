<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h3 align="center">Crear nueva Cita</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
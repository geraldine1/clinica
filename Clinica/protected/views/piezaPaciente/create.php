<?php
/* @var $this PiezaPacienteController */
/* @var $model PiezaPaciente */

$this->breadcrumbs=array(
	'Pieza Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PiezaPaciente', 'url'=>array('index')),
	array('label'=>'Manage PiezaPaciente', 'url'=>array('admin')),
);
?>

<h1>Create PiezaPaciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
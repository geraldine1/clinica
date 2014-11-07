<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Pacientes', 'url'=>array('index')),
	array('label'=>'Administrar Pacientes', 'url'=>array('admin')),
);
?>

<h1>Create Paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
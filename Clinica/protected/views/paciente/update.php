<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->rut_paciente=>array('view','id'=>$model->rut_paciente),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Pacientes', 'url'=>array('index')),
	array('label'=>'Administrar Pacientes', 'url'=>array('admin')),
        array('label'=>'Volver', 'url'=>array('view','id'=>$model->rut_paciente)),
);
?>

<h1>Update Paciente <?php echo $model->rut_paciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this PiezaPacienteController */
/* @var $model PiezaPaciente */

$this->breadcrumbs=array(
	'Pieza Pacientes'=>array('index'),
	$model->id_pieza_paciente=>array('view','id'=>$model->id_pieza_paciente),
	'Update',
);

$this->menu=array(
	array('label'=>'List PiezaPaciente', 'url'=>array('index')),
	array('label'=>'Create PiezaPaciente', 'url'=>array('create')),
	array('label'=>'View PiezaPaciente', 'url'=>array('view', 'id'=>$model->id_pieza_paciente)),
	array('label'=>'Manage PiezaPaciente', 'url'=>array('admin')),
);
?>

<h1>Update PiezaPaciente <?php echo $model->id_pieza_paciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
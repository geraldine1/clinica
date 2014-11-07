<?php
/* @var $this PiezaPacienteController */
/* @var $model PiezaPaciente */

$this->breadcrumbs=array(
	'Pieza Pacientes'=>array('index'),
	$model->id_pieza_paciente,
);

$this->menu=array(
	array('label'=>'List PiezaPaciente', 'url'=>array('index')),
	array('label'=>'Create PiezaPaciente', 'url'=>array('create')),
	array('label'=>'Update PiezaPaciente', 'url'=>array('update', 'id'=>$model->id_pieza_paciente)),
	array('label'=>'Delete PiezaPaciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pieza_paciente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PiezaPaciente', 'url'=>array('admin')),
);
?>

<h1>View PiezaPaciente #<?php echo $model->id_pieza_paciente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_odontograma',
		'id_pieza',
		'id_pieza_paciente',
	),
)); ?>

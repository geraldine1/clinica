<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis,
);

 $idficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
 $idPaciente = Paciente::model()->findByAttributes(array('rut_paciente' => $idficha->rut_paciente));

$this->menu=array(
	//array('label'=>'List Anamnesis', 'url'=>array('index')),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>$model->id_anamnesis)),
        array('label' => 'Volver a Datos del Paciente', 'url' => array('Paciente/view', 'id' => $idPaciente->rut_paciente)),
);
?>

<h1>Anamnesis  <?php echo $idPaciente->nombre_paciente . " " . $idPaciente->apellidos_paciente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_anamnesis',
		//'id_ficha',
		'alergias',
		'enfermedades',
		'enfermedades_familia',
		'medicamentos',
		'otros',
	),
)); ?>

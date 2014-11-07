<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis=>array('view','id'=>$model->id_anamnesis),
	'Update',
);
$idficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
$idPaciente = Paciente::model()->findByAttributes(array('rut_paciente' => $idficha->rut_paciente));
 
$this->menu=array(
	array('label'=>'Volver a Anamesis', 'url'=>array('view', 'id'=>$model->id_anamnesis)),
        array('label' => 'Volver a Datos del Paciente', 'url' => array('Paciente/view', 'id' => $idPaciente->rut_paciente)),
);
?>

<h1>Actualizar Anamnesis de <?php echo $idPaciente->nombre_paciente . " " . $idPaciente->apellidos_paciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
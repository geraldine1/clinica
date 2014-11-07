<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	$model->id_realizado=>array('view','id'=>$model->id_realizado),
	'Update',
);
$atencion = Atencion::model()->findByAttributes(array('id_atencion' => $model->id_atencion));
$ficha = FichaDental::model()->findByAttributes(array('id_ficha'=>$atencion->id_ficha));
$paciente = Paciente::model()->findByAttributes(array('rut_paciente' =>$ficha->rut_paciente));
$this->menu=array(
	array('label'=>'Volver a listado de Tratamientos', 'url'=>array('Atencion/tratamientos','id'=>$model->id_atencion)),
    array('label'=>'Volver datos del paciente', 'url'=>array('Paciente/view','id'=>$paciente->rut_paciente)),
);
?>

<h1>Actualizar Tratamiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
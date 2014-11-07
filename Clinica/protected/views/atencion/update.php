<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	$model->id_atencion=>array('view','id'=>$model->id_atencion),
	'Update',
);
$ficha = FichaDental::model()->findByAttributes(array('id_ficha'=>$model->id_ficha));
$paciente = Paciente::model()->findByAttributes(array('rut_paciente' =>$ficha->rut_paciente));

$this->menu=array(
	array('label'=>'Volver Atencion', 'url'=>array('Paciente/atenciones', 'id'=>$paciente->rut_paciente)),
	array('label'=>'Volver datos del paciente', 'url'=>array('Paciente/view','id'=>$paciente->rut_paciente)),
);
?>

<h1>Modificar Atencion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
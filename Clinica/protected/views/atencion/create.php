<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	'Create',
);
$ficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
$paciente = Paciente::model()->findByAttributes(array('rut_paciente'=>$ficha->rut_paciente));
$this->menu=array(
        array('label' => 'Volver a Datos del Paciente', 'url' => array('Paciente/view', 'id' => $paciente->rut_paciente)),
);

?>

<h1>Añadir Atención</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
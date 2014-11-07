<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('tieneTratamiento/tratamientosPieza','id_pieza_paciente' => $model->id_pieza_paciente)),
);
?>

<h1>Añadir Observación</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
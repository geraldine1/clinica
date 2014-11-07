<?php
/* @var $this DiaNoDisponibleController */
/* @var $model DiaNoDisponible */

$this->breadcrumbs=array(
	'Dia No Disponibles'=>array('index'),
	$model->id_dia_no_disponible=>array('view','id'=>$model->id_dia_no_disponible),
	'Update',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h3 align="center">Actualizar día no disponible</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
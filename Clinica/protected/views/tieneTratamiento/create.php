<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */

$this->breadcrumbs=array(
	'Tiene Tratamientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Volver a Odontograma', 'url'=>array('tratamientoRealizado/TratamientoCara' , 'id'=>$tratamiento)),
);
?>

<h1>Añadir comentario a pieza tratada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
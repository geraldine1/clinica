<?php
/* @var $this DiaController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Inhabilitar Bloque en específico', 'url'=>array('bloqueNoDisponible/create')),
);
?>

<h3 align="center">Manejar Bloques por Día</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewDia',
)); ?>
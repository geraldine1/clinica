<?php
/* @var $this BloqueNoDisponibleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bloque No Disponibles',
);

$this->menu=array(
	array('label'=>'Create BloqueNoDisponible', 'url'=>array('create')),
	array('label'=>'Manage BloqueNoDisponible', 'url'=>array('admin')),
);
?>

<h1>Bloque No Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this PiezaPacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pieza Pacientes',
);

$this->menu=array(
	array('label'=>'Create PiezaPaciente', 'url'=>array('create')),
	array('label'=>'Manage PiezaPaciente', 'url'=>array('admin')),
);
?>

<h1>Pieza Pacientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Crear Paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Pacientes</h3>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut_paciente',
		'nombre_paciente',
		'apellidos_paciente',
		'direccion_paciente',
		'ciudad_paciente',
		'telefono_paciente',
		/*
		'correo_paciente',
		'sexo_paciente',
		'fecha_nac_paciente',
		'profesion_paciente',
		'lugar_trabajo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

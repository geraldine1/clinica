<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Cita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Citas</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cita-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_cita',
                array(
                    'name'=>'paciente',
                    'value'=>'$data->rutPaciente->nombre_paciente',
                ),
                array(
                    'name'=>'apellidos',
                    'value'=>'$data->rutPaciente->apellidos_paciente',
                ),
		'rut_paciente',
		'estado_cita',
		'fecha',
		//'id_bloque',
                array(
                    'name'=>'hora',
                    'value'=> '$data->idBloque->inicio',
                ),
                array(
                    'name'=>'fin',
                    'value'=> '$data->idBloque->fin',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

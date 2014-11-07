<?php
/* @var $this BloqueNoDisponibleController */
/* @var $model BloqueNoDisponible */

$this->breadcrumbs=array(
	'Bloque No Disponibles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inhabilitar bloque en específico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bloque-no-disponible-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Bloques No Disponibles</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bloque-no-disponible-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_no_disponible',
		'fecha',
                array(
                    'name'=>'nombre',
                    'value'=>'$data->idBloque->idDia->nombre_dia',
                ),
                array(
                    'name'=>'inicio',
                    'value'=>'$data->idBloque->inicio',
                ),
                array(
                    'name'=>'fin',
                    'value'=>'$data->idBloque->fin',
                ),
		array(
			'class'=>'CButtonColumn',
                        'template' => '{update}{delete}',
		),
	),
)); ?>

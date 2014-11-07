<?php
/* @var $this FichaDentalController */
/* @var $model FichaDental */

$this->breadcrumbs=array(
	'Ficha Dentals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FichaDental', 'url'=>array('index')),
	array('label'=>'Create FichaDental', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ficha-dental-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Adminsitrar Fichas Dentales</h3>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'ficha-dental-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'id_ficha',
		'rut_paciente',
                array(
                        'name'=>'nombre',
                        'value'=>'$data->paciente->nombre_paciente', 
                        'type'=>'text',
                ),
		'fecha_creacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

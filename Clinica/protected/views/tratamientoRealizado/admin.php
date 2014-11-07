<?php
/* @var $this TratamientoRealizadoController */
/* @var $model TratamientoRealizado */

$this->breadcrumbs=array(
	'Tratamiento Realizados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TratamientoRealizado', 'url'=>array('index')),
	array('label'=>'Create TratamientoRealizado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tratamiento-realizado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Manage Tratamiento Realizados</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'tratamiento-realizado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_realizado',
		'id_atencion',
		'id_tratamiento',
		'comentario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

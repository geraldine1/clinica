<?php
/* @var $this TratamientoController */
/* @var $model Tratamiento */

$this->breadcrumbs=array(
	'Tratamientos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tratamiento', 'url'=>array('index')),
	array('label'=>'Create Tratamiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tratamiento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Listado de tratamientos</h3>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'tratamiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tratamiento',
		'nombre',
		'descripcion',
                'valor',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

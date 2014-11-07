<?php
/* @var $this ObservacionController */
/* @var $model Observacion */

$this->breadcrumbs=array(
	'Observacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Observacion', 'url'=>array('index')),
	array('label'=>'Create Observacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#observacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Listar Observaciones</h3>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'observacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_observacion',
		'id_pieza_paciente',
		'observacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

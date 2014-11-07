<?php
/* @var $this TieneTratamientoController */
/* @var $model TieneTratamiento */

$this->breadcrumbs=array(
	'Tiene Tratamientos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TieneTratamiento', 'url'=>array('index')),
	array('label'=>'Create TieneTratamiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tiene-tratamiento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Administrar Tratamientos</h3>




<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'tiene-tratamiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_realizado',
		'id_tiene_tratamiento',
		'id_pieza_paciente',
		'comentario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

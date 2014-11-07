<?php
/* @var $this AtencionController */
/* @var $model Atencion */

$this->breadcrumbs=array(
	'Atencions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Atencion', 'url'=>array('index')),
	array('label'=>'Create Atencion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#atencion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Administrar Atenciones</h3>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'atencion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_atencion',
		'id_ficha',
		'fecha',
		'fecha_inicio',
		'fecha_termino',
		'estado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

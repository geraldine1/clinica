<?php
/* @var $this OdontogramaController */
/* @var $model Odontograma */

$this->breadcrumbs=array(
	'Odontogramas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Odontograma', 'url'=>array('index')),
	array('label'=>'Create Odontograma', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#odontograma-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Odontogramas</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'odontograma-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_odontograma',
		'id_ficha',
		'comentario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

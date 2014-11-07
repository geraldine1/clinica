<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Anamnesis', 'url'=>array('index')),
	array('label'=>'Create Anamnesis', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#anamnesis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Adminsitrar Anamnesis</h3>




<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'anamnesis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_anamnesis',
		'id_ficha',
		'alergias',
		'enfermedades',
		'enfermedades_familia',
		'medicamentos',
		/*
		'otros',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

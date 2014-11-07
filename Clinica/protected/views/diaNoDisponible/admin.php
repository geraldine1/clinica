<?php
/* @var $this DiaNoDisponibleController */
/* @var $model DiaNoDisponible */

$this->breadcrumbs=array(
	'Dia No Disponibles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Bloquear día en específico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dia-no-disponible-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Administrar Días No Disponibles</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dia-no-disponible-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_dia_no_disponible',
		'fecha',
		//'id_dia',
                array(
                    'name' => 'nombre',
                    'value' => '$data->idDia->nombre_dia',
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{update}{delete}', // botones a mostrar           
                    //'updateButtonUrl' => 'Yii::app()->createUrl("foro/update&id=$data->id_foro")',
                ),    
	),
)); ?>

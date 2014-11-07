<?php
/* @var $this ForoController */
/* @var $model Foro */

$this->breadcrumbs = array(
    'Foros' => array('index'),
    'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#foro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3 align="center">Listado de consultas</h3>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'foro-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'htmlOptions'=>array('style'=>'word-wrap:break-word; width:1100px;'),
    'columns' => array(
        //'id_foro',
        //'rut_consultante',
        'correo_consultante',
        'fecha_consulta',
        array(
            'name'=>'pregunta',
            'htmlOptions'=>array('style'=>'max-width:300px'),
        ),        
        //'respuesta',        
        'estado_consulta',
         
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}', // botones a mostrar           
            'updateButtonUrl' => 'Yii::app()->createUrl("foro/update&id=$data->id_foro")',
        ),
    ),
));
?>

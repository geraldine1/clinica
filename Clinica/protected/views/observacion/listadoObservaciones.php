
<h3 align="center">Observaciones</h3>

<?php

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('tieneTratamiento/tratamientosPieza','id_pieza_paciente' => $modelPieza->id_pieza_paciente)),
);


//$id = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'TratamientosRealizadosPieza',
    'dataProvider' => $model->searchByPieza($modelPieza->id_pieza_paciente),
    'filter' => $model,
    'columns' => array(
        'observacion',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}', // botones a mostrar
            'updateButtonUrl' => 'Yii::app()->createUrl("Observacion/update&id=$data->id_observacion")',
            'deleteConfirmation' => 'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete' => '$.fn.yiiGridView.update("listadoObservaciones");', // actualiza el grid después de borrar
        ),
    ),
));
?>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'label' => 'Nombre:',
            'value' => obtieneNombre($model),
        ),
    ),
));
?>

<h3><?php echo 'Tratamientos del paciente'; ?></h3>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'TratamientosRealizados',
    'dataProvider' => $modelTratamiento->searchByPaciente($model->id_ficha),
    'filter' => $modelTratamiento,
    'columns' => array(
        'id_realizado',
        'id_ficha',
        'id_tratamiento',
        
        'comentario',
        'valor',
        'fecha',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}', // botones a mostrar
            'updateButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/update&id=$data->id_realizado" )', // url de la acción 'update'
            'deleteButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/delete&id=$data->id_realizado" )', // url de la acción 'delete'
            'viewButtonUrl' => 'Yii::app()->createUrl("/TratamientoRealizado/view&id=$data->id_realizado" )', // url de la acción 'delete'
            'deleteConfirmation' => 'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete' => '$.fn.yiiGridView.update("TratamientosRealizados");', // actualiza el grid después de borrar
        ),
    ),
));

//Funciones

function obtieneNombre($model) {
    $idFicha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
    $nombrePaciente = Paciente::model()->findByAttributes(array('rut_paciente' => $idFicha->rut_paciente));
    return $nombrePaciente->nombre_paciente . " " . $nombrePaciente->apellidos_paciente;
}
?>
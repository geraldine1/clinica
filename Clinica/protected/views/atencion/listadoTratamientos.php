<?php
$ficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
$paciente = Paciente::model()->findByAttributes(array('rut_paciente'=>$ficha->rut_paciente));
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'label' => 'Run del paciente:',
            //'value' => obtieneNombre($model),
            'value' => $paciente->rut_paciente,
        ),
        array(
            'label' => 'Nombre del paciente:',
            'value' => $paciente->nombre_paciente ." ".$paciente->apellidos_paciente,
        ),
        array(
            'label' => 'Fecha de la Atención',
            'value' => $model->fecha,
        ),
        array(
            'label' => 'Fecha de la Inicio',
            'value' => $model->fecha_inicio,
        ),
        array(
            'label' => 'Fecha de Termino',
            'value' => $model->fecha_termino,
        ),
    ),
));

$this->menu=array(
        array('label' => 'Volver a Datos del Paciente', 'url' => array('Paciente/view', 'id' => $paciente->rut_paciente)),
);

?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'TratamientosRealizados',
    'dataProvider' => $modelTratamiento->searchByAtencion($model->id_atencion),
    'filter' => $modelTratamiento,
    'columns' => array(
        //'id_realizado',
        //'id_atencion',
        //'id_tratamiento',
        'comentario',
        array(
                        'name'=>'Nombre_Tratamiento',
                        'value'=>'$data->idTratamiento->nombre', 
                        'type'=>'text',
                ),
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
?>

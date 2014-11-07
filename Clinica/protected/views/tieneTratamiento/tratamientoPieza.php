<h3><?php echo "Tratamientos Aplicados a la Pieza" ?></h3>
<?php
/*$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'label' => 'Run del paciente:',
            //'value' => obtieneNombre($model),
            'value' => $model->rut_paciente,
        ),
    ),
));*/
$odontograma = Odontograma::model()->findByAttributes(array('id_odontograma' => $model->id_odontograma));
$ficha = FichaDental::model()->findByAttributes(array('id_ficha' => $odontograma->id_ficha));
$paciente = Paciente::model()->findByAttributes(array('rut_paciente'=>$ficha->rut_paciente));
$this->menu=array(
        array('label' => 'Añadir Observaciones', 'url' => array('Observacion/create' , 'id' => $model->id_pieza_paciente)),
        array('label' => 'Ver Observaciones', 'url' => array('Observacion/listadoObservaciones' , 'id' => $model->id_pieza_paciente)),
        array('label' => 'Volver a datos del Paciente', 'url' => array('Paciente/view' , 'id' => $paciente->rut_paciente)),
);

?>
<?php
//$id = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
 $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'TratamientosRealizadosPieza',
    'dataProvider' => $modelTieneTratamiento->searchByPieza($model->id_pieza_paciente),
    'filter' => $modelTieneTratamiento,
    'columns' => array(
        'comentario',
        array(
                        'name'=>'pieza',
                        'value'=>'$data->idPiezaPaciente->idPieza->nombre_pieza', 
                        'type'=>'text',
                ),
        array(
                        'name'=>'tratamiento',
                        'value'=>'$data->idRealizado->idTratamiento->nombre', 
                        'type'=>'text',
                ),
        /*array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}', // botones a mostrar
            'viewButtonUrl' => 'Yii::app()->createUrl("atencion/tratamientos&id=$data->id_atencion")',
            'updateButtonUrl' => 'Yii::app()->createUrl("atencion/update&id=$data->id_atencion")',
        ),*/
    ),
));
?>
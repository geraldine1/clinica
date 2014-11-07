
<h3 align="center"><?php echo 'Tratamientos de '; echo obtieneNombre($model) ?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'label' => 'Run del paciente:',
            //'value' => obtieneNombre($model),
            'value' => $model->rut_paciente,
        ),
    ),
));

$this->menu=array(
        array('label' => 'Volver a Datos del Paciente', 'url' => array('Paciente/view', 'id' => $model->rut_paciente)),
);

?>
<?php
$id = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'TratamientosRealizados',
    'dataProvider' => $modelAtencion->searchByPaciente($id->id_ficha),
    'filter' => $modelAtencion,
    'columns' => array(
        //'id_atencion',
        'fecha',
        'fecha_inicio',
        'fecha_termino',
        'estado',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}', // botones a mostrar
            'viewButtonUrl' => 'Yii::app()->createUrl("atencion/tratamientos&id=$data->id_atencion")',
            'updateButtonUrl' => 'Yii::app()->createUrl("atencion/update&id=$data->id_atencion")',
        ),
    ),
));

//Funciones

function obtieneNombre($model) {
    return $model->nombre_paciente . " " . $model->apellidos_paciente;
}
?>
<?php
/* @var $this FichaDentalController */
/* @var $model FichaDental */

$this->breadcrumbs = array(
    'Ficha Dental' => array('index'),
    //$model->id_ficha,
    $model->rut_paciente,
);
 $idanamnesis = Anamnesis::model()->findByAttributes(array('id_ficha' => $model->id_ficha));
$this->menu = array(
    array('label' => 'Listar Fichas', 'url' => array('index')),
    array('label' => 'Anamnesis', 'url' => array('anamnesis/view&id=' . $idanamnesis->id_anamnesis)),
    array('label' => 'Añadir Tratamiento', 'url' => array('tratamientoRealizado/create', 'idFicha'=>$model->id_ficha)),
    array('label'=>'Tratamientos del paciente', 'url'=>array('tratamientoPaciente', 'id'=>$model->id_ficha)),
    array('label' => 'Odontograma Paciente', 'url' => array('odontograma')),
    //array('label' => 'Delete FichaDental', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_ficha), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Administrar Fichas', 'url' => array('admin')),
);
?>

<h1>View FichaDental #<?php echo $model->id_ficha; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id_ficha',
        'rut_paciente',
        'fecha_creacion',
    ),
));
?>
<div id="form"></div>
 <?php 
 /*echo CHtml::link('Anamnesis', Yii::app()->baseUrl . '/index.php?r=anamnesis/update&id=' . $idanamnesis->id_anamnesis);
 echo "</br>";
 echo CHtml::link('Odontograma',array('odontograma')); */
 ?>


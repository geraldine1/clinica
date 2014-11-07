<?php
/* @var $this ForoController */
/* @var $data Foro */
?>
<div class="view">
        
            <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_consulta')); ?></b>
            <?php
                $f = new DateTime($data->fecha_consulta);
                $fecha= $f->format("d-m-Y"); 
            ?>
            <?php echo CHtml::encode($fecha); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('pregunta')); ?></b>
            <?php echo CHtml::encode($data->pregunta); ?>
            <br />

            <b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?></b>
            <?php echo CHtml::encode($data->respuesta); ?>
            <br />

            <b><?php //echo CHtml::encode($data->getAttributeLabel('estado_consulta')); ?></b>
            <?php //echo CHtml::encode($data->estado_consulta); ?>
	<br />

</div>
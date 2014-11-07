<?php
/* @var $this FichaDentalController */
/* @var $data FichaDental */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ficha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ficha), array('view', 'id'=>$data->id_ficha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_paciente')); ?>:</b>
	<?php //echo CHtml::encode($data->rut_paciente); ?>
        <?php echo CHtml::link(CHtml::encode($data->rut_paciente), array('view', 'id'=>$data->id_ficha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />


</div>
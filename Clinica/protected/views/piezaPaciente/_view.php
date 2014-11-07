<?php
/* @var $this PiezaPacienteController */
/* @var $data PiezaPaciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza_paciente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pieza_paciente), array('view', 'id'=>$data->id_pieza_paciente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_odontograma')); ?>:</b>
	<?php echo CHtml::encode($data->id_odontograma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza')); ?>:</b>
	<?php echo CHtml::encode($data->id_pieza); ?>
	<br />


</div>
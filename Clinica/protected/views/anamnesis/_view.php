<?php
/* @var $this AnamnesisController */
/* @var $data Anamnesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anamnesis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anamnesis), array('view', 'id'=>$data->id_anamnesis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ficha')); ?>:</b>
	<?php echo CHtml::encode($data->id_ficha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergias')); ?>:</b>
	<?php echo CHtml::encode($data->alergias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades_familia')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades_familia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentos')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />


</div>
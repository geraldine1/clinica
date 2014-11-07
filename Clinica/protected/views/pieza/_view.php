<?php
/* @var $this PiezaController */
/* @var $data Pieza */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pieza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pieza), array('view', 'id'=>$data->id_pieza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_pieza')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_pieza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />


</div>
<?php
/* @var $this OdontogramaController */
/* @var $data Odontograma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_odontograma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_odontograma), array('view', 'id'=>$data->id_odontograma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ficha')); ?>:</b>
	<?php echo CHtml::encode($data->id_ficha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />


</div>
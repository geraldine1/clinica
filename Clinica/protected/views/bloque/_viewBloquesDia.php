<?php
/* @var $this BloqueController */
/* @var $data Bloque */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php 
            $inicio = strtotime($data->inicio);
            echo CHtml::encode(date("H:i",$inicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin')); ?>:</b>
	<?php 
            $fin = strtotime($data->fin);
            echo CHtml::encode(date("H:i",$fin)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->estado), array('cambiaEstadoBloque', 'id'=>$data->id_bloque)); ?>
	<br />


</div>
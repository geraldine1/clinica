<?php
/* @var $this ObservacionController */
/* @var $model Observacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_observacion'); ?>
		<?php echo $form->textField($model,'id_observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pieza_paciente'); ?>
		<?php echo $form->textField($model,'id_pieza_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
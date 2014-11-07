<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_anamnesis'); ?>
		<?php echo $form->textField($model,'id_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ficha'); ?>
		<?php echo $form->textField($model,'id_ficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedades'); ?>
		<?php echo $form->textArea($model,'enfermedades',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedades_familia'); ?>
		<?php echo $form->textArea($model,'enfermedades_familia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicamentos'); ?>
		<?php echo $form->textArea($model,'medicamentos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otros'); ?>
		<?php echo $form->textArea($model,'otros',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this PiezaController */
/* @var $model Pieza */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pieza'); ?>
		<?php echo $form->textField($model,'id_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_pieza'); ?>
		<?php echo $form->textField($model,'nombre_pieza',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
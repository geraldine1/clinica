<?php
/* @var $this DiaNoDisponibleController */
/* @var $model DiaNoDisponible */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dia-no-disponible-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"fecha",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->fecha,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                        'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'minDate'=>'1',
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                        'yearRange'=>'-80',
                ),
            ))?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_dia'); ?>
		<?php //echo $form->textField($model,'id_dia'); ?>
		<?php //echo $form->error($model,'id_dia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
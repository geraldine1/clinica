<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reporte',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"inicio",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->inicio,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                        
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                        'yearRange'=>'-80',
                ),
            ))?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'fin'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"fin",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->fin,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                       
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                        'yearRange'=>'-80',
                ),
            ))?>
		<?php echo $form->error($model,'fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
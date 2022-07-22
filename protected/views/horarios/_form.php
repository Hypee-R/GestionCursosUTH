<?php
/* @var $this HorariosController */
/* @var $model Horarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CURSO'); ?>
		<?php echo $form->dropDownList($model,'CURSO', CHtml::listData(Cursos::model()->findAll(array('order' => 'ID_CURSO ASC', 'condition'=>'STATUS=1')), 'ID_CURSO','CURSO'), array('empty'=>'Seleccione un curso')); ?>
		<?php echo $form->error($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIA'); ?>
		<?php echo $form->dropDownList($model,'DIA',
		CHtml::listData(Semana::model()->findAll(), 'DIA','DIA'), array('empty'=>'Seleccione el día'),
		array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'DIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HORA_INICIO'); ?>
		<?php echo $form->textField($model,'HORA_INICIO'); ?>
		<?php echo $form->error($model,'HORA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HORA_FIN'); ?>
		<?php echo $form->textField($model,'HORA_FIN'); ?>
		<?php echo $form->error($model,'HORA_FIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this CursoLugarController */
/* @var $model CursoLugar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-lugar-form',
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
		<?php echo $form->dropDownList($model,'CURSO',
		CHtml::listData(Cursos::model()->findAll(array('order' => 'ID_CURSO ASC', 'condition'=>'STATUS=1')), 'ID_CURSO','CURSO'), array('empty'=>'Seleccione un curso')); ?>
		<?php echo $form->error($model,'CURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LUGAR'); ?>
		<?php echo $form->dropDownList($model,'LUGAR',
		CHtml::listData(Lugares::model()->findAll(array('order' => 'CODIGO ASC')), 'CODIGO','CODIGO'), array('empty'=>'Seleccione un lugar'),
		array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'LUGAR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
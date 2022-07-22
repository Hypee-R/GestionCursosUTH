<?php
/* @var $this LugaresController */
/* @var $model Lugares */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugares-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODIGO'); ?>
		<?php echo $form->textField($model,'CODIGO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'CODIGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CEDE'); ?>
		<?php echo $form->dropDownList($model,'CEDE',
		CHtml::listData(Cede::model()->findAll(), 'ID_CEDE','NOMBRE_CEDE'), array('empty'=>'Seleccione la cede')); ?>
		<?php echo $form->error($model,'CEDE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO'); ?>
		<?php echo $form->textField($model,'USUARIO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATOS_GENERALES'); ?>
		<?php echo $form->textField($model,'DATOS_GENERALES'); ?>
		<?php echo $form->error($model,'DATOS_GENERALES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFIL'); ?>
		<?php echo $form->textField($model,'PERFIL'); ?>
		<?php echo $form->error($model,'PERFIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS'); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
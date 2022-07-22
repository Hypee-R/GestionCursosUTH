<?php
/* @var $this DatosGeneralesController */
/* @var $model DatosGenerales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_DATO_GENERAL'); ?>
		<?php echo $form->textField($model,'ID_DATO_GENERAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO_PATERNO'); ?>
		<?php echo $form->textField($model,'APELLIDO_PATERNO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO_MATERNO'); ?>
		<?php echo $form->textField($model,'APELLIDO_MATERNO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURP'); ?>
		<?php echo $form->textField($model,'CURP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOMICILIO'); ?>
		<?php echo $form->textField($model,'DOMICILIO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODIGO_POSTAL'); ?>
		<?php echo $form->textField($model,'CODIGO_POSTAL',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIUDAD'); ?>
		<?php echo $form->textField($model,'CIUDAD',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUNICIPIO'); ?>
		<?php echo $form->textField($model,'MUNICIPIO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOCALIDAD'); ?>
		<?php echo $form->textField($model,'LOCALIDAD',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TELEFONO',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CELULAR'); ?>
		<?php echo $form->textField($model,'CELULAR',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
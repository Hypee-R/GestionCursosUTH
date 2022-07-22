<?php
/* @var $this DatosGeneralesController */
/* @var $model DatosGenerales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datos-generales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_PATERNO'); ?>
		<?php echo $form->textField($model,'APELLIDO_PATERNO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'APELLIDO_PATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_MATERNO'); ?>
		<?php echo $form->textField($model,'APELLIDO_MATERNO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'APELLIDO_MATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREO'); ?>
		<?php echo $form->emailField($model,'CORREO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CURP'); ?>
		<?php echo $form->textField($model,'CURP',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'CURP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOMICILIO'); ?>
		<?php echo $form->textField($model,'DOMICILIO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'DOMICILIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODIGO_POSTAL'); ?>
		<?php echo $form->textField($model,'CODIGO_POSTAL',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'CODIGO_POSTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIUDAD'); ?>
			<?php 
			$criteria= new CDbCriteria;
			$criteria->select = "CIUDAD";
			$criteria->group = "CIUDAD";
			?>
		<?php echo $form->dropDownList($model,'CIUDAD',
		CHtml::listData(Federaciones::model()->findAll($criteria), 'CIUDAD','CIUDAD'), 
		 array(
                            'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('DatosGenerales/dynamicMunicipios'),
                            'update' => '#DatosGenerales_MUNICIPIO'
                        ),'prompt' => 'Seleccione la ciudad...'),
		 array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CIUDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MUNICIPIO'); ?>
		<?php 
		$criteria= new CDbCriteria;
		$criteria->select = "MUNICIPIO";
		$criteria->group = "MUNICIPIO";
		?>
		<?php echo $form->dropDownList($model,'MUNICIPIO',
		CHtml::listData(Federaciones::model()->findAll($criteria), 'MUNICIPIO','MUNICIPIO'),
		array(
                            'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('DatosGenerales/dynamicLocalidad'),
                            'update' => '#DatosGenerales_LOCALIDAD'
                        ),'prompt' => 'Seleccione un municipio...'),
		 array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'MUNICIPIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOCALIDAD'); ?>
			<?php 
				$criteria= new CDbCriteria;
				$criteria->select = "LOCALIDAD";
				$criteria->condition = "MUNICIPIO='San Martin Texmelucan' ";
			?>
		<?php echo $form->dropDownList($model,'LOCALIDAD',
		CHtml::listData(Federaciones::model()->findAll($criteria), 'LOCALIDAD','LOCALIDAD'),
		 array('empty'=>'Seleccione la localidad...'), array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'LOCALIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONO'); ?>
		<?php echo $form->numberField($model,'TELEFONO',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CELULAR'); ?>
		<?php echo $form->numberField($model,'CELULAR',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'CELULAR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
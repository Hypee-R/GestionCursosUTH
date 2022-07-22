<?php
/* @var $this DatosGeneralesController */
/* @var $data DatosGenerales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_DATO_GENERAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_DATO_GENERAL), array('view', 'id'=>$data->ID_DATO_GENERAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_MATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->CORREO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURP')); ?>:</b>
	<?php echo CHtml::encode($data->CURP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOMICILIO')); ?>:</b>
	<?php echo CHtml::encode($data->DOMICILIO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CODIGO_POSTAL')); ?>:</b>
	<?php echo CHtml::encode($data->CODIGO_POSTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CIUDAD')); ?>:</b>
	<?php echo CHtml::encode($data->CIUDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUNICIPIO')); ?>:</b>
	<?php echo CHtml::encode($data->MUNICIPIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOCALIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->LOCALIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->CELULAR); ?>
	<br />

	*/ ?>

</div>
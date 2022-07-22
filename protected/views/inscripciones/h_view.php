<?php
/* @var $this InscripcionesController */
/* @var $data Inscripciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_INSCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_INSCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />
	<br/>

</div>
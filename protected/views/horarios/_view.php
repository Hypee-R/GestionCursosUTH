<?php
/* @var $this HorariosController */
/* @var $data Horarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_HORARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_HORARIO), array('view', 'id'=>$data->ID_HORARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIA')); ?>:</b>
	<?php echo CHtml::encode($data->DIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORA_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->HORA_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORA_FIN')); ?>:</b>
	<?php echo CHtml::encode($data->HORA_FIN); ?>
	<br />


</div>
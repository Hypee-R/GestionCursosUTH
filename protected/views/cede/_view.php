<?php
/* @var $this CedeController */
/* @var $data Cede */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CEDE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_CEDE), array('view', 'id'=>$data->ID_CEDE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_CEDE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_CEDE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION); ?>
	<br />


</div>
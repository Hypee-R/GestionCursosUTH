<?php
/* @var $this CategoriasController */
/* @var $data Categorias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CATEGORIA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_CATEGORIA), array('view', 'id'=>$data->ID_CATEGORIA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORIA')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORIA); ?>
	<br />


</div>
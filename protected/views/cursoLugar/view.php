<?php
/* @var $this CursoLugarController */
/* @var $model CursoLugar */

$this->breadcrumbs=array(
	'Curso Lugars'=>array('index'),
	$model->ID_CURSOLUGAR,
);

$this->menu=array(
	array('label'=>'List CursoLugar', 'url'=>array('index')),
	array('label'=>'Create CursoLugar', 'url'=>array('create')),
	array('label'=>'Update CursoLugar', 'url'=>array('update', 'id'=>$model->ID_CURSOLUGAR)),
	array('label'=>'Delete CursoLugar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_CURSOLUGAR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CursoLugar', 'url'=>array('admin')),
);
?>

<h1>VISTA CursoLugar #<?php echo $model->ID_CURSOLUGAR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_CURSOLUGAR',
		'cURSO.CURSO',
		'lUGAR.DESCRIPCION',
	),
)); ?>

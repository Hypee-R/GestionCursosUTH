<?php
/* @var $this HorariosController */
/* @var $model Horarios */

$this->breadcrumbs=array(
	'Horarioses'=>array('index'),
	$model->ID_HORARIO,
);

$this->menu=array(
	array('label'=>'List Horarios', 'url'=>array('index')),
	array('label'=>'Create Horarios', 'url'=>array('create')),
	array('label'=>'Update Horarios', 'url'=>array('update', 'id'=>$model->ID_HORARIO)),
	array('label'=>'Delete Horarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_HORARIO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horarios', 'url'=>array('admin')),
);
?>

<h1>View Horarios #<?php echo $model->ID_HORARIO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_HORARIO',
		'cURSO.CURSO',
		'DIA',
		'HORA_INICIO',
		'HORA_FIN',
	),
)); ?>

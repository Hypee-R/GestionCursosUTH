<?php
/* @var $this InscripcionesController */
/* @var $model Inscripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	$model->ID_INSCRIPCION,
);
if (Yii::app()->user->checkAccess('Administrador'))
{  
$this->menu=array(
	array('label'=>'Lista de Inscripciones', 'url'=>array('index')),
	array('label'=>'Crear Nueva Inscripcion', 'url'=>array('create')),
	array('label'=>'Actualizar Inscripciones', 'url'=>array('update', 'id'=>$model->ID_INSCRIPCION)),
	array('label'=>'Eliminar Inscripciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_INSCRIPCION),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Inscripciones', 'url'=>array('admin')),
);
}
?>

<h1>Detalle Inscripción #<?php echo $model->ID_INSCRIPCION; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_INSCRIPCION',
		'cURSO.CURSO',
		'pERSONA.USUARIO',
		'tIPOINSCRIPCION.TIPO_INSCRIPCION',
		'STATUS',
	),
)); ?>

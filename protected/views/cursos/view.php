<?php
/* @var $this CursosController */
/* @var $model Cursos */

$this->breadcrumbs=array(
	'Cursoses'=>array('index'),
	$model->ID_CURSO,
);

$this->menu=array(
	array('label'=>'Asignar Lugar al Curso', 'url'=>array('cursoLugar/create')),
	array('label'=>'List Cursos', 'url'=>array('index')),
	array('label'=>'Create Cursos', 'url'=>array('create')),
	array('label'=>'Update Cursos', 'url'=>array('update', 'id'=>$model->ID_CURSO)),
	array('label'=>'Delete Cursos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_CURSO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cursos', 'url'=>array('admin')),
);
?>

<h1>Detalle Curso #<?php echo $model->ID_CURSO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_CURSO',
		'CURSO',
		'CUPO',
		'STATUS',
		'CATEGORIA',
		'FECHA_INICIO',
		'FECHA_FIN',
	),
)); ?>

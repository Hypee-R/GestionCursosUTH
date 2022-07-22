<?php
/* @var $this InscripcionesController */
/* @var $model Inscripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	$model->ID_INSCRIPCION=>array('view','id'=>$model->ID_INSCRIPCION),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inscripciones', 'url'=>array('index')),
	array('label'=>'Create Inscripciones', 'url'=>array('create')),
	array('label'=>'View Inscripciones', 'url'=>array('view', 'id'=>$model->ID_INSCRIPCION)),
	array('label'=>'Manage Inscripciones', 'url'=>array('admin')),
);
?>

<h1>Update Inscripciones <?php echo $model->ID_INSCRIPCION; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
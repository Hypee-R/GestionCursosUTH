<?php
/* @var $this CursosController */
/* @var $model Cursos */

$this->breadcrumbs=array(
	'Cursoses'=>array('index'),
	$model->ID_CURSO=>array('view','id'=>$model->ID_CURSO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cursos', 'url'=>array('index')),
	array('label'=>'Create Cursos', 'url'=>array('create')),
	array('label'=>'View Cursos', 'url'=>array('view', 'id'=>$model->ID_CURSO)),
	array('label'=>'Manage Cursos', 'url'=>array('admin')),
);
?>

<h1>Update Cursos <?php echo $model->ID_CURSO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
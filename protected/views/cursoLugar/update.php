<?php
/* @var $this CursoLugarController */
/* @var $model CursoLugar */

$this->breadcrumbs=array(
	'Cursos Lugares'=>array('index'),
	$model->ID_CURSOLUGAR=>array('view','id'=>$model->ID_CURSOLUGAR),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List CursoLugar', 'url'=>array('index')),
	array('label'=>'Create CursoLugar', 'url'=>array('create')),
	array('label'=>'View CursoLugar', 'url'=>array('view', 'id'=>$model->ID_CURSOLUGAR)),
	array('label'=>'Manage CursoLugar', 'url'=>array('admin')),
);
?>

<h1>Actualizar CursoLugar <?php echo $model->ID_CURSOLUGAR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CedeController */
/* @var $model Cede */

$this->breadcrumbs=array(
	'Cedes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cede', 'url'=>array('index')),
	array('label'=>'Manage Cede', 'url'=>array('admin')),
);
?>

<h1>Crear Cede</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
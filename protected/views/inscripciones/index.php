<?php
/* @var $this InscripcionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inscripciones',
);

$this->menu=array(
	array('label'=>'Create Inscripciones', 'url'=>array('create')),
	array('label'=>'Manage Inscripciones', 'url'=>array('admin')),
);
?>

<h1>Inscripciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

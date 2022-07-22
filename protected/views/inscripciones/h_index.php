<?php
/* @var $this InscripcionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historial Inscripciones',
);
?>

<h1>Historial de Inscripciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'h_view',
)); ?>
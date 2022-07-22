<?php
/* @var $this CursosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cursos',
);

$this->menu=array(
	array('label'=>'Create Cursos', 'url'=>array('create')),
	array('label'=>'Manage Cursos', 'url'=>array('admin')),
);
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this CursoLugarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cursos Lugares',
);

$this->menu=array(
	array('label'=>'Create CursoLugar', 'url'=>array('create')),
	array('label'=>'Manage CursoLugar', 'url'=>array('admin')),
);
?>

<h1>Cursos Lugares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Novedades de Cursos',
);
?>

<h1>Proximos Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_vview',
)); ?>
<?php
$this->breadcrumbs=array(
	'Cursos',
);
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_vview',
)); ?>
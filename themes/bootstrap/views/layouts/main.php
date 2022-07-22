<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
<div style="background-color: blue">
<?php if (Yii::app()->user->isGuest)
{ ?> 
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Registrate', 'url'=>array('/datosGenerales/create')),
				array('label'=>'Cursos', 'url'=>array('#'), 'items'=>array(
						array('label'=>'Ver todos los cursos', 'url'=>array('/cursos/VCursos')),
						array('label'=>'Inscribirme a un curso', 'url'=>array('/inscripciones/create')),
						)),
				array('label'=>'Novedades', 'url'=>array('/cursos/Novedades')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<?php } elseif (Yii::app()->user->checkAccess('Participante'))
{ ?> 
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
				array('label'=>'Cursos', 'url'=>array('#'), 'items'=>array(
						array('label'=>'Ver todos los cursos', 'url'=>array('/cursos/VCursos')),
						array('label'=>'Inscribirme a un curso', 'url'=>array('/inscripciones/create')),
						array('label'=>'Mis cursos', 'url'=>array('cursos/Tomados', 'user'=>Yii::app()->user->id)),
						)),
				array('label'=>'Novedades', 'url'=>array('/cursos/Novedades')),
				array('label'=>'Historial', 'url'=>array('/inscripciones/Historial','id_user'=>Yii::app()->user->id)),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<?php } elseif (Yii::app()->user->checkAccess('Instructor'))
{ ?> 
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
				array('label'=>'Cursos', 'url'=>array('#'), 'items'=>array(
						array('label'=>'Ver todos los cursos', 'url'=>array('/cursos/VCursos')),
						array('label'=>'Inscribirme a un curso', 'url'=>array('/inscripciones/create')),
						array('label'=>'Mis cursos', 'url'=>array('#'), 'items'=>array(
										array('label'=>'Organizados', 'url'=>array('cursos/Organizados', 'user'=>Yii::app()->user->id)),
										array('label'=>'Impartidos', 'url'=>array('/cursos/Impartidos', 'user'=>Yii::app()->user->id)),
										array('label'=>'Tomados', 'url'=>array('/cursos/Tomados', 'user'=>Yii::app()->user->id)),
								)),
						)),
				array('label'=>'Novedades', 'url'=>array('/cursos/Novedades')),
				array('label'=>'Historial', 'url'=>array('/inscripciones/Historial','id_user'=>Yii::app()->user->id)),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<?php } elseif(Yii::app()->user->checkAccess('Organizador'))
{ ?>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
				array('label'=>'Cursos', 'url'=>array('#'), 'items'=>array(
						array('label'=>'Ver todos los cursos', 'url'=>array('/cursos/VCursos')),
						array('label'=>'Inscribirme a un curso', 'url'=>array('/inscripciones/create')),
						array('label'=>'Mis cursos', 'url'=>array('#'), 'items'=>array(
										array('label'=>'Organizados', 'url'=>array('cursos/Organizados', 'user'=>Yii::app()->user->id)),
										array('label'=>'Impartidos', 'url'=>array('/cursos/Impartidos', 'user'=>Yii::app()->user->id)),
										array('label'=>'Tomados', 'url'=>array('/cursos/Tomados', 'user'=>Yii::app()->user->id)),
								)),
						)),
				array('label'=>'Novedades', 'url'=>array('/cursos/Novedades')),
				array('label'=>'Historial', 'url'=>array('/inscripciones/Historial','id_user'=>Yii::app()->user->id)),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<?php } elseif(Yii::app()->user->checkAccess('Administrador'))
{ ?>
 
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Usuarios', 'url'=>array('#'), 'items'=>array(
						array('label'=>'Ver todos los usuarios', 'url'=>array('/datosGenerales')),
						array('label'=>'Registrar', 'url'=>array('/datosGenerales/create')),
						array('label'=>'Asignar Rol', 'url'=>array('/usuarios')),
						)),
				array('label'=>'Cursos', 'url'=>array('#'),  'items'=>array(
						array('label'=>'Ver todos los cursos', 'url'=>array('/cursos/VCursos')),
						array('label'=>'Administrar cursos', 'url'=>array('/cursos/create')),
						)),
				array('label'=>'Inscripciones', 'url'=>array('#'),  'items'=>array(
						array('label'=>'Ver las inscripciones', 'url'=>array('/inscripciones')),
						array('label'=>'Administrar inscripciones', 'url'=>array('/inscripciones/admin')),
						)),
				array('label'=>'Utilerías', 'url'=>array('#'),  'items'=>array(
						array('label'=>'Categorias', 'url'=>array('#'), 'items'=>array(
										array('label'=>'Ver categorias', 'url'=>array('/categorias')),
										array('label'=>'Crear categoria', 'url'=>array('/categorias/create')),
										array('label'=>'Administrar categorias', 'url'=>array('/categorias/admin')),
								 )),
						array('label'=>'Cedes', 'url'=>array('#'), 'items'=>array(
								  		array('label'=>'Ver cedes', 'url'=>array('/cede')),
										array('label'=>'Crear cede', 'url'=>array('/cede/create')),
										array('label'=>'Administrar cedes', 'url'=>array('/cede/admin')),
								  )),
						array('label'=>'Cursos lugares', 'url'=>array('#'), 'items'=>array(
								  		array('label'=>'Ver cursos lugares', 'url'=>array('/cursoLugar')),
										array('label'=>'Asignar curso lugar', 'url'=>array('/cursoLugar/create')),
										array('label'=>'Administrar curso lugare', 'url'=>array('/cursoLugar/admin')),
								  )),
						array('label'=>'Horarios', 'url'=>array('#'), 'items'=>array(
								  		array('label'=>'Ver horarios', 'url'=>array('/horarios')),
										array('label'=>'Crear horario', 'url'=>array('/horarios/create')),
										array('label'=>'Administrar horarios', 'url'=>array('/horarios/admin')),
								  )),
						array('label'=>'Lugares', 'url'=>array('#'), 'items'=>array(
								  		array('label'=>'Ver lugares', 'url'=>array('/lugares')),
										array('label'=>'Crear lugar', 'url'=>array('/lugares/create')),
										array('label'=>'Administrar lugares', 'url'=>array('/lugares/admin')),
								  )),
						)),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
<?php } ?>
</div>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Universidad Tecnológica de Huejotzingo.<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

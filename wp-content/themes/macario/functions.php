<?php
global $colores,$tamanos;

if( isset( $_POST['ajax_gafa'] ) ){
	require_once('procesos/ajax.php');
};
/*COLORES*/
define( 'GRIS',	'#f4f4f4' );
define( 'NEGRO','black' );
define( 'BLANCO','white' );
define( 'GRIS_O','#333333');
define( 'AZUL','#002eff');

$colores = array(
	'gris'	=> GRIS,
	'negro'	=> NEGRO,
	'blanco'=> BLANCO,
	'gris_o'=> GRIS_O,
	'azul'	=> AZUL,
);

$tamanos = array(
	'small'		=> '17px',
	'normal'	=> '40px',
	'title'		=> '50px',
	'titlesp'	=> '100px',
);
/*OPCIONES*/
set_options_gafa();
function set_options_gafa(){
	/* EJEMPLO
	$home				= get_last_post('opciones_home');

	define('HOME',		$home);
	*/
};

function slideuno(){
?>
<div class="contenidouno content">
	<div class="texto-superior color_blanco monse text-left">
		<div class="title bolder s1title anima1">
			Hola!
		</div>
		<div class="title bolder shadowtext s1content anima2">
			Somos Macario, potenciadores de marcas
		</div>
		<div class="small shadowtext s1content s1last lighter anima3">
			Creamos experiencias asombrosas
		</div>
		<div class="small botonaccion color_blanco text-center monse s1buton pointer botontrabajo">
			Nuestro trabajo
		</div>
	</div>
</div>
<?php
}

function slidedos(){
	$IdsAplicaciones = get_posts(array(
		'post_type'     => 'proyectos',
		'posts_per_page'=> -1,
		'fields'        => 'ids',
		'orderby'		=> 'date',
		'order'			=> 'ASC',
	));
?>
	<div class="contenidodos content">
		<div class="flechas-slider">
			<div class="atras-slider flecha">

			</div>
			<div class="next-slider flecha">

			</div>
		</div>
		<div class="carrete-proyecto">
			<?php
			foreach ($IdsAplicaciones as $ids) {
				$proyecto = new macario\Proyectos($ids);
				echo'
				<div class="proyecto-item">
					<div class="slide-proyectos spleft">
						<div class="info-proyecto text-left">
							<div class="color_azul monse pititulo title bolder anima1">
								'.$proyecto->Nombre.'
							</div>
							<div class="color_azul monse pititulo small lighter anima2">
								'.$proyecto->Desc_corta.'
							</div>
							<a href="'.$proyecto->Permalink.'" data-color="#ffffff" class="boton-proyecto color_azul botonaccion monse small text-center anima3">Ver proyecto</a>
						</div>
					</div><!--
					--><div class="slide-proyectos spleft" style="background-image:url('.$proyecto->Foto_principal.')">

					</div>
				</div>';
			}
		 	?>
		</div>
	</div>
<?php
}
function slidetres(){
?>
<div class="contenidotres content">
	<div class="slide-proyectos azulsection">
		<div class="texto-superior color_blanco monse text-left lighter">
			<div class="title shadowtext s1content bolder anima1">
				Somos Macario.
			</div>
			<div class="title shadowtext s1content bolder anima2">
				Experiencias creadas a la medida.
			</div>
			<div class="small shadowtext s1content s1last lighter anima3">
				Nos mueven las ideas, sin importar su tamaño.
			</div>
			<div class="small botonaccion color_blanco text-center monse s1buton pointer botontrabajo">
				Nuestro trabajo
			</div>
		</div>
	</div><!--
	--><div class="slide-proyectos slide-animado"></div>
</div>
<?php
}
function slidecuatro(){
?>
	<div class="contenidocuatro content">
		<div class="monse color_blanco text-center title bolder">
			¡Mandanos un mail!
		</div>
		<a href="mailto:hola@casamacario.mx" class="boton-envia blanco text-center color_azul monse small botonaccion">hola@casamacario.mx</a>
	</div>
<?php
}
function get_last_post( $post_type = false ){
	if( !$post_type ){ return; };

	$last = get_posts( array(
		'post_type'			=> $post_type,
		'posts_per_page'	=> 1,
		'fields'			=> 'ids',
	) );

	if( !$last && !is_admin() ){ die('No hay opciones de: '.$post_type); };
	return reset( $last );
};


/*CLASES*/
require_once('classes/inicio.php');


function compatible( $string = '' ){
	$c = array(
		'',
		'-moz-',
		'-ms-',
		'-o-',
		'-webkit-',
	);
	foreach( $c as $x ){
		echo $x.$string;
	};
};
/*FUNCIONES CON POSTS*/
if( !function_exists('crear') ){
	function crear( $post_type = false, $usuario = false, $fecha = false ){
		if( !$post_type ){ return; };
		if( !$usuario ){
			global $current_user;
			$usuario = $current_user->ID;
		};
		$post_nuevo = array(
			'post_title'	=> '',
			'post_status'	=> 'publish',
			'post_author'	=> $usuario,
			'post_type'		=> $post_type,
		);
		if( $fecha ){
			$post_nuevo['post_date'] = $fecha;
		};

		return  wp_insert_post( $post_nuevo );
	};
};
if( !function_exists('actualizar_nombre') ){
	function actualizar_nombre( $id_post = false, $nombre = false ){
		if( !$id_post || !$nombre ){ return; };
		return  wp_update_post(array(
			'post_title'	=> $nombre,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_status') ){
	function actualizar_status( $id_post = false, $post_status = false ){
		if( !$id_post || !$post_status ){ return; };
		return  wp_update_post(array(
			'post_status'	=> $post_status,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_fecha') ){
	function actualizar_fecha( $id_post = false, $fecha = false ){
		if( !$id_post || !$fecha ){ return; };
		return  wp_update_post(array(
			'post_date'		=> $fecha,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_contenido') ){
	function actualizar_contenido( $id_post = false, $txt = false ){
		if( !$id_post || !$txt ){ return; };
		return  wp_update_post(array(
			'post_content'		=> $txt,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('eliminar') ){
	function eliminar( $id_post = false ){
		if( !$id_post ){ return; };
		return  wp_delete_post( $id_post, true );
	};
};


?>

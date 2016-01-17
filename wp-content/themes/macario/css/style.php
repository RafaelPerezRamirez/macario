<?php global $colores,$tamanos;?>
<style type="text/css">
/*@font-face{
   font-family: "Gotham";
   src: url("<?php plantilla();?>/fonts/GothamRnd-Light.otf");
   font-weight:400;
}*/
*{
	margin:0px;
	padding:0px;
	color:inherit;
	text-decoration:none;
	<?php compatible('box-sizing:border-box;');?>
}
body,html{
	display:block;
	min-height:100%;
}
ol,ul {
	list-style-position: inside;
}
img{
	max-width:100%;
	height:auto;
	border: 0px solid;
}
a,[data-link],[data-accion]{
	<?php compatible( 'transition:1s opacity ease;' );?>
}
a:hover,[data-link]:hover,[data-accion]:hover{
	opacity:0.6;
}
.oculto{
	display:none !important;
}
.escondido{
	display:none;
}
.inline-block{
	display:inline-block;
	vertical-align:middle;
}
.vertical-align-top{
	vertical-align:top;
}
.checkbox {
	display: inline-block;
	vertical-align: middle;
	margin-right: 13px;
	height: 15px;
	width: 15px;
	border: 1px solid <?php echo GRIS;?>;
	border-radius: 100%;
	cursor: pointer;
}
.checkbox:hover {
	box-shadow: 0px 0px 0px 4px white inset;
	background: <?php echo GRIS;?>;
}
.checkbox.checked{
	box-shadow: 0px 0px 0px 4px white inset;
	background: black;
}
/*ERROR GAFA*/
.gafa-mensaje,.gafa-error{
	position: fixed;
	top: -61px;
	background: url("<?php plantilla(); ?>/images/X2.png") no-repeat 2% 52% rgba(32,32,32,.9);
	min-height: 61px;
	z-index: 2147483647;
	line-height: 19px;
	font-size: 10px;
	cursor: pointer;
	color: white;
	font-weight: 100;
	padding: 10px 6%;
	left: 0px;
	right:0px;
	text-align: left;
	letter-spacing: 1px;
}
.gafa-error {
	background-color: rgba(202,25,25,.9);
}
.gafa-error h1,.gafa-mensaje h1 {
	font-size: 21px;
	font-weight: 100;
	margin-top: 16px;
}
.con_error{
	border-color:red!important;
}
/*PREGUNTAS GAFA*/
div#pregunta_gafa {
	position: fixed;
	z-index: 999;
	background: #FFF;
	padding: 80px;
	top: 30%;
	right: 0px;
	left: 50%;
	width: 360px;
	margin-left: -275px;
	text-align: center;
	border: 1px solid #808080;
}

div#pregunta_gafa .boton {
	margin: 3px 5px;
}

div#aceptar_pregunta_gafa {
	margin-top: 13px !important;
}
/*CARGANDO*/
#cargando {
	background-color: rgba(255,255,255,0.8);
	background-image: url('<?php plantilla(); ?>/images/carga.gif');
}
.cover{
	position: fixed;
	-webkit-transform: translateZ(0);
	top: 0px;
	left: 0px;
	bottom: 0px;
	right: 0px;
	z-index:999;
	background-position: center center;
	background-repeat: no-repeat;
}
/*ALIGN VERTICAL----------------------------------------------------------*/
.centrado_vertical:after {
	content: '';
	display: inline-block;
	height: 100%;
	width: 0.01%;
	vertical-align: middle;
}
.elemento_centrado {
	display: inline-block;
	width: 99.08%;
	vertical-align: middle;
}
.centrado_vertical {
	text-align: center;
}
.uppercase{
	text-transform: uppercase;
}
.text-left{
	text-align: left;
}
.text-right{
	text-align: right;
}
.text-center{
	text-align: center;
}
.text-justify{
	text-align: justify;
}
.bolder{
	font-weight: bolder;
}
.lighter{
	font-weight: lighter;
}
.sanslight{
	font-family: 'Open Sans', sans-serif;
	font-weight: lighter;
}
.sansnormal{
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
}
.sansbold{
	font-family: 'Open Sans', sans-serif;
	font-weight: bolder;
}
.italic{
	font-style: italic;
}
.section{
	width: 100%;
}
.seccion-2-row{
	display: inline-block;
	vertical-align: top;
}
.seccion-2-row:first-child{
	width: 30%;
}
.seccion-2-row:last-child{
	width: 70%;
}
.cabeceraseccion{
	width: 100%;
	height: 450px;
	position: relative;
}
.textocabecera{
	font-size: 48px;
	position: absolute;
	bottom: 30%;
	right: 10%;
}
.infostaff{
	width: 60%;
	margin-left: 35%;
	margin-top: 50px;
}
.infostaff .normal{
	margin-bottom: 10px;
}
.infostaff .parrafo{
	margin-bottom: 23px;
}
.estudioseccion{
	width: 80%;
	margin: 0 auto;
}
.estudio--row{
	width: 47%;
	display: inline-block;
	vertical-align: top;
	margin-top: 60px;
	margin-bottom: 20px;
}
.estudio--row:first-child{
	margin-right: 5%;
}
.estudio--row .parrafo{
	margin-bottom: 16px;
}
.fotoestudio{
	width: 100%;
	height: 230px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-image: url('<?php plantilla(); ?>/images/estudio.jpg');
}
.team-member{
	width: 300px;
	margin-right: 30px;
}
.memberphoto{
	width: 100%;
	height: 150px;
	background-image: url('<?php plantilla(); ?>/images/member.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
/*colores--------------------------------------*/
<?php
	foreach( $colores as $clase => $color ){
		echo '.'.$clase.' { background-color: '.$color.'; }';
		echo '.color_'.$clase.' { color: '.$color.'; }';
	};
	foreach( $tamanos as $clase => $color ){
		echo '.'.$clase.' { font-size: '.$color.'; }';
	};
?>
</style>

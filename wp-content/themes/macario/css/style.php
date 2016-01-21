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
	position: relative;
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
.attach{
	text-decoration: line-through;
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
	font-size: 38px;
	position: absolute;
	bottom: 30%;
	right: 12%;
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
.memberinfo{
	margin-top: 15px;
	margin-bottom: 10px;
}
.flechamember {
    position: relative;
    top: 3px;
}
.redmember{
	margin-right: 5px;
	background-image: url('<?php plantilla(); ?>/images/redes1.png');
	width: 15px;
	height: 15px;
	background-repeat: no-repeat;
	display: inline-block;
}
.redmember:last-child{
	margin-right: 0px!important;
}
.memberinline{
	display: inline-block;
	vertical-align: bottom;;
}
.memberinline:first-child {
    margin-right: 57%;
}

a.redmember.redtw {
    background-position: -24px 0px;
}

a.redmember.redli {
    background-position: -50px 0px;
}

a.redmember.redgmas {
    background-position: -76px 0px;
}
.seccion1{
	height: 100vh;
	background-image: url('<?php plantilla(); ?>/images/top.png');
	background-attachment: fixed;
	position: relative;
	background-size: 150%;
	<?php compatible('transition:20s ease-in;'); ?>
}
.logocabecera{
	position: absolute;
	top: 0%;
	left: 8%;
	opacity: 0;
	<?php compatible('transition:0.5s ease;'); ?>
}
.redescabecera{
	left: 10%;
	bottom: 8%;
	opacity: 0;
	position: absolute;
	<?php compatible('transition:0.5s ease;'); ?>
}
.redcabecera{
	margin-right: 5px;
	background-image: url('<?php plantilla(); ?>/images/redes2.png');
	width: 25px;
	height: 25px;
	background-repeat: no-repeat;
	display: inline-block;
}
a.redcabecera.redcfb {
    background-position: -50px 0px;
}
a.redcabecera.redcli {
    background-position: -98px 0px;
}
.contacto--row{
	display: inline-block;
	width: 50%;
	vertical-align: top;
	position: relative;
}
.contacto--row:last-child{
	padding-top: 110px;
}
.contacto--direccion {
    width: 20%;
    margin-bottom: 25px;
}
.contacto--legal {
    margin-top: 270px;
}
.contacto--logos {
	position: absolute;
    top: 22.5%;
    right: 12%;
}
.separator{
	height: 30px;
}
.redcontacto{
	margin-right: 5px;
	background-image: url('<?php plantilla(); ?>/images/redes3.png');
	width: 25px;
	height: 25px;
	background-repeat: no-repeat;
	display: inline-block;
}
a.redcontacto.redli2 {
    background-position: -39px 0px;
}
a.redcontacto.redgmas2 {
    background-position: -74px 0px;
}
.contacto-redes {
    top: 90px;
    left: 50px;
    position: relative;
}
footer{
	height: 100px;
	background-image: url('<?php plantilla(); ?>/images/footer.png');
	background-repeat: no-repeat;
	background-position: center center;
}
footer a{
	opacity: 0.8;
}
.botonmenu{
	width: 30px;
	height: 20px;
	position: absolute;
	right: 10%;
	top: 0%;
	opacity: 0;
	cursor: pointer;
	<?php compatible('transition:0.5s ease;'); ?>
}
.lineamenu{
	width: 30px;
	height: 1px;
	display: block;
	background: white;
	position: relative;
}
.contacto--logos img {
    width: 85%;
}
.textobanner{
	font-size: 85px;
	position: absolute;
	top: 46%;
	opacity: 0;
	left: 50%;
	<?php compatible('transform: translate(-50%,-50%);'); ?>
	<?php compatible('transition:1s ease;'); ?>
}
.menubanner{
	width: 500px;
	height: 300px;
	font-size: 35px;
	position: absolute;
	top: 32%;
	right: 14%;
}
.rayitamenu{
	position: absolute;
	width: 50px;;
	bottom: -10px;
	left: 50%;
	<?php compatible('transform: translateX(-50%);'); ?>
	height: 3px;
	background: white;
	<?php compatible('transition:0.5s ease;'); ?>
}
.menuitem:hover .rayitamenu{
	width: 90px;
}
.menuitem{
	width: 36%;
	text-align:center;
	opacity: 0;
	pointer-events: none;
	<?php compatible('transition:0.5s ease;'); ?>
}
.mnit1{
	position: absolute;
	top: 0;
	left: 10%;
}
.mtlnext{
	left: 0%!important;
	opacity: 1;
	pointer-events: all;
	cursor: pointer;
}
.mtrnext{
	right: 0%!important;
	opacity: 1;
	pointer-events: all;
	cursor: pointer;
}
.mnit2{
	position: absolute;
	bottom: 0;
	left: 10%;
}
.mnit3{
	position: absolute;
	top: 0;
	right: -10%;
}
.mnit4{
	position: absolute;
	bottom: 0;
	right: -10%;
}
.rayabanner{
	top: 49%;
	position: absolute;
	width: 47%;
	height: 12px;
	display: inline-block;
	vertical-align: middle;
	background: white;
}
.inlineraya{
	position: relative;
}
.texto--raya{
	margin-left: 43%;
}
.cbs1{
	background-image: url('<?php plantilla(); ?>/images/lineasquare.png');
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.layernegro{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(40,40,41,1)!important;
	z-index: 1000;
	<?php compatible('transition:0.5s ease-in;'); ?>
}
.botonmenu .lineamenu{
	<?php compatible('transition:0.5s ease;'); ?>
}
.lm1{
	top: 0px;
}
.lm2{
	top: 7px;
}
.lm3{
	top: 14px;
}
.botonmenu:hover .lm1{
	width: 10px;
}
.botonmenu:hover .lm2{
	width: 20px;
}
.textobannermedium{
	left: 30%;
}
.menu_abierto .lm1{
	<?php compatible('transform: rotate(45deg);'); ?>
	top: 7px;
}
.menu_abierto:hover .lm1{
	width: 30px!important;
}
.menu_abierto .lm2{
    opacity: 0;
}.
.menu_abierto .lm3{
	top: 7px;
	<?php compatible('transform: rotate(-45deg);'); ?>
}
.seccionfade, .seccionfade2, .seccionfade4{
    position: relative;
    top: 75px;
	<?php compatible('transition:0.5s ease;'); ?>
	opacity: 0;
	pointer-events: none;
}
.seccionvisible{
	top: 0px;
	opacity: 1;
	pointer-events: all;
}
.seccionprojects{
	/*position: fixed;
	z-index: -1;*/
	left: 0;
	right: 0;
	top: 0;
	width: 100%;
	height: 100vh;
	background-image: url('<?php plantilla(); ?>/images/projects.jpg');
	background-repeat: no-repeat;
	background-position: top center;
	background-size: cover;
}
/*.bajarsec{
	margin-top: 100vh;
	background: white;
}*/
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

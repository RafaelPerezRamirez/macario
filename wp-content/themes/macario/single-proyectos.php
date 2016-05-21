<?php
    get_header();
    global $post;
        $proyecto = new macario\Proyectos($ids);
        echo '
            <div class="proyecto-interno">
                <div class="cabecera-proyecto-interno" style="background-image:url('.$proyecto->Foto_principal.')">
                    <div class="info-proyecto-interno">
                        <div class="normal color_azul monse titulo-proyectointerno bolder">
                            '.$proyecto->Nombre.'
                        </div>
                        <div class="small color_azul monse subti-proyectointerno lighter">
                            '.$proyecto->Desc_corta.'
                        </div>
                    </div>
                </div>
                <div class="cintillo-interno">
                    <div class="cintillos cintilloleft">
                        <div class="color_azul small monse lighter text-left textocintillo">
                            '.$proyecto->Desc_larga.'
                        </div>
                    </div><!--
                    --><div class="cintillos cintilloright" style="background-image:url('.$proyecto->Imagencintillo.')"></div>
                </div>
                <div class="galeria">
                    <div class="galeriaitem1" style="background-image:url('.$proyecto->Contenidouno.')"></div>
                    <div class="galeriagrilla">
                        <div class="ggrilla ggrillaleft" style="background-image:url('.$proyecto->Contenidodos.')">
                        </div><!--
                        --><div class="ggrilla ggrillaright" style="background-image:url('.$proyecto->Contenidotres.')">
                        </div>
                    </div>
                    <div class="galeriaitem2" style="background-image:url('.$proyecto->Contenidocuatro.')"></div>
                    <div class="galeriaitem3" style="background-image:url('.$proyecto->Contenidocinco.')"></div>
                </div>
            </div>
        ';
        $IdsAplicaciones = get_posts(array(
            'post_type'     => 'proyectos',
            'posts_per_page'=> 1,
            'fields'        => 'ids',
            'orderby'		=> 'rand',
        ));
        foreach ($IdsAplicaciones as $ids) {
            $proyectos = new macario\Proyectos($ids);
        echo '<div class="footerproyecto">
            <a href="mailto:contacto@casamacario.mx" class="foop azul color_blanco monse lighter small text-center">
                Mandanos un mail
            </a><!--
            --><a href="'.$proyectos->Permalink.'" class="foop color_azul blanco monse lighter small text-center">
                Siguiente proyecto
            </a>
        </div>';
    }
?>

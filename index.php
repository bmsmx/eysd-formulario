<?php
/**
 * Plugin Name: EYSD Formulario
 * Author: Manuel Villavicencio G.
 * Description: Formulario personalizado que utiliza shortcode [eysd-form1]
 * Version: 1.0
 */
// Define el shortcode que muestra el formulario
add_shortcode('eysd_form1','eysd_form1');

function mi_css_personalizado(){
        wp_enqueue_style('mi-css', plugins_url('/style.css', __FILE__), array(), '1.0.0');
    }
    add_action('wp_enqueue_style', 'mi_css_personalizado');
function eysd_form1()
{
   // wp_register_style('css_aspirante', plugins_url('/style.css', __FILE__));
   // wp_enqueue_style('css_aspirante');
    ob_start();

?>

<form action="<?php get_the_permalink(); ?>" method="post" id="form1" class="cuestionario">
    <div class="form-input">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div class="form-input">
        <label for='correo'>Correo</label>
        <input type="email" name="correo" id="correo" required>
    </div>
    <div class="form-input">
        <label for="nivel_html">¿Cuál es tu nivel de HTML?</label>
        <input type="radio" name="nivel_html" value="1" required> Nada
        <br><input type="radio" name="nivel_html" value="2" required> Estoy
        aprendiendo
        <br><input type="radio" name="nivel_html" value="3" required> Tengo
        experiencia
        <br><input type="radio" name="nivel_html" value="4" required> Lo
        domino al dedillo
    </div>
    <div class="form-input">
        <label for="nivel_css">¿Cuál es tu nivel de CSS?</label>
        <input type="radio" name="nivel_css" value="1" required> Nada
        <br><input type="radio" name="nivel_css" value="2" required> Estoy
        aprendiendo
        <br><input type="radio" name="nivel_css" value="3" required> Tengo
        experiencia
        <br><input type="radio" name="nivel_css" value="4" required> Lo
        domino al dedillo
    </div>
    <div class="form-input">
        <label for="nivel_js">¿Cuál es tu nivel de JavaScript?</label>
        <input type="radio" name="nivel_js" value="1" required> Nada
        <br><input type="radio" name="nivel_js" value="2" required> Estoy
        aprendiendo
        <br><input type="radio" name="nivel_js" value="3" required> Tengo
        experiencia
        <br><input type="radio" name="nivel_js" value="4" required> Lo domino
        al dedillo
    </div>
    <div class="form-input">
        <label for="aceptacion">La información facilitada se tratará
            con respeto y admiración.</label>
        <input type="checkbox" id="aceptacion" name="aceptacion" value="1" required> Entiendo y acepto las condiciones
    </div>
    <div class="form-input">
        <input type="submit" value="Enviar">
    </div>
</form>


<?php
return ob_get_clean();
}
?>
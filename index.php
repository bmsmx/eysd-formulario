<?php
/**
 * Plugin Name: EYSD Formulario
 * Author: Manuel Villavicencio G.
 * Description: Formulario personalizado que utiliza shortcode [eysd-form1]
 * Version: 1.0
 */
// Define el shortcode que muestra el formulario
add_shortcode('eysd_form1','eysd_form1');
function eysd_form1()
{
    ob_start();

?>
<style>
form.cuestionario {
    width: 600px;
}
form.cuestionario label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}
form.cuestionario .form-input {
    padding: 1em;
}
form.cuestionario .form-input input[type='text'],
form.cuestionario .form-input input[type='email'] {
    display: block;
    width: 100%;
}
p.exito {
    font-size: 1.5em;
    padding: 1em;
    border: 2px solid green;
    background: lightgreen;
}
p.error {
    font-size: 1.5em;
    padding: 1em;
    border: 2px solid red;
    background: #ff8787;
}

</style>
<form action="<?php get_the_permalink(); ?>" method="post" id="form_aspirante
class="cuestionario"">
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
            <input type="checkbox" id="aceptacion" name="aceptacion"
value="1" required> Entiendo y acepto las condiciones
        </div>
        <div class="form-input">
            <input type="submit" value="Enviar">
        </div>
    </form>


<?php
return ob_get_clean();
}
?>
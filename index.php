<?php
/**
 * Plugin Name: EYSD Formulario
 * Author: Manuel Villavicencio G.
 * Description: Formulario personalizado que utiliza shortcode [eysd-form1]
 * Version: 1.0
 */
// Define el shortcode que muestra el formulario
add_shortcode('eysd-form1','eysd-form1');
function eysd-form1()
{
    ob_start();

?>
<form action="<?php get_the_permalink(); ?>" method="post" id="form_aspirante
class="cuestionario"">
        <div class="form-input">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        
        <div class="form-input">
            <input type="submit" value="Enviar">
        </div>
    </form>

<?php
return ob_get_clean();
}
?>
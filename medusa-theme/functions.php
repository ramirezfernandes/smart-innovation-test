<?php 
function  medusa_theme_support () {

    // Chamar um título de tag
    add_theme_support ( 'title-tag' );

    // Adicionar o logotipo
    add_theme_support ( 'custom-logo' );
    
}
add_action ( 'after_setup_theme' , 'medusa_theme_support' );

?>
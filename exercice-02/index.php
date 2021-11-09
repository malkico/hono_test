<?php
/**
 * @package HoloPlugin
 * @version 0.1.0
 */
/*
Plugin Name: Holo Malki Plugin
Plugin URI: https://github.com/malkico
Description: Je suis le meilleur candidat pour ce poste ;)
Version: 0.1.0
Author URI: MALKI Hicham
*/  

add_shortcode("show_social_network", "generate_social_media");

function generate_social_media( $atts){
    return '<ul>
    <li> <a href="https://facebook.com/'.$atts["facebook"].'"> Facebook</a> </li>
    <li> <a href="https://instagram.com/'.$atts["instagram"].'"> Instagram</a> </li>
    <li> <a href="https://Linkedin.com/'.$atts["linkedin"].'"> Instagram</a> </li>
    <li> <a href="https://GitHub.com/'.$atts["github"].'"> Instagram</a> </li>
    </ul>
    <a>';
}

/* Pour utiliser ce code, veuillez intégrer ce widget par exemple: 
    [show_social_network facebook="Kadem.sahir" instagram="malki_hi"] 
*/
?>
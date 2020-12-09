<?php
/**
 * Plugin Name:       Mundo Financeiro
 * Description:       Exemplo de plugin que exibe um Olá mundo!
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Eduardo Nascimento
 * Author URI:        https://www.linkedin.com/in/eduardo-nascimento-zenite/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mundo-financeiro
 * Domain Path:       /languages
 */

function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Olá, Mundo Financeiro', 'textdomain' ),
        'Mundo Financeiro',
        'manage_options',
        'WordPress-Plugin-Boilerplate/content.php',
        '',
        'dashicons-money-alt',
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


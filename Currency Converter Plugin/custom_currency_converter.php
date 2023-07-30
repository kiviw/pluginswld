<?php
/**
 * Plugin Name: Custom Currency Converter
 * Plugin URI: Your plugin website URL
 * Description: A plugin to convert WLD amount to KSH amount.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: Your website URL
 * Text Domain: custom-currency-converter
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Convert WLD amount to KSH amount
function wld_to_ksh_converter($amount_in_wld) {
    // Conversion rate: 1 WLD = 210 KSH (Change this value as needed)
    $conversion_rate = 210;
    $amount_in_ksh = $amount_in_wld * $conversion_rate;
    return $amount_in_ksh;
}

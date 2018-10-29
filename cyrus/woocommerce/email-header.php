<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 *
 * @author  themes.email
 * @url     yourtheme/woocommerce/emails/email-header.php
 * @package yourtheme/woocommerce/emails/
 * @version 2018
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Load colors.
$bg              = get_option( 'woocommerce_email_background_color' );
$body            = get_option( 'woocommerce_email_body_background_color' );
$base            = get_option( 'woocommerce_email_base_color' );
$text            = get_option( 'woocommerce_email_text_color' );
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            @media only screen and (max-width: 480px) {
                .logo {
                    height: auto !important;
                    max-width: 80% !important;
                }
            }

            @media only screen and (max-width: 480px) {
                .bodyCopy, .tourCopy {
                    height: auto !important;
                    max-width: 90% !important;
                    font-size: 13px !important;
                }
            }
        </style>
    </head>
    <body style="font-family: Helvetica, Sans Serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background: <?php echo esc_attr( $bg ); ?>; Margin: 0; padding: 0;">
        <table class="bg-fw-blue" border="0" cellpadding="0" cellspacing="0" width="100%"
               style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: <?php echo esc_attr( $base ); ?>;">
            <tbody>
                <tr>
                    <td align="center" class="logoContainer" style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 25px 0 0;">
                        <a href="https://themes.email/" style="-webkit-appearance: none; -moz-appearance: none; text-decoration: none; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
                            <?php
                                if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" border="0" class="logo" style="-ms-interpolation-mode: bicubic; display: block; max-width: 330px; padding: 25px 0;" />';
                                }
                            ?>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Content -->
        <table class="bg-lightest-grey" border="0" cellpadding="0" cellspacing="0" width="100%"
               style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: <?php echo esc_attr( $body ); ?>;">
            <tbody>
                <tr>
                    <td align="center" style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 0px 0px 40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td id="emailcontent" align="center" style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                        <div id="hs_cos_wrapper_feature-copy" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                             style="color: inherit; font-size: inherit; line-height: inherit;">
                            <div class="bodyCopy" style="color: <?php echo esc_attr( $text ); ?>; font-size: 13px; text-align:left; line-height: 150%; max-width: 600px; margin: 0 0 1em;">

                                <!--  Here Goes Content: Start  -->
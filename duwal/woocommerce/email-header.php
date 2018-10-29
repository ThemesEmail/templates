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
<html style="background: <?php echo esc_attr( $bg ); ?>; font-family:Avenir,Roboto,Helvetica,Arial,sans-serif; font-style: normal; color:<?php echo esc_attr( $text ); ?>;" <?php language_attributes(); ?>>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            body {
                background: <?php echo esc_attr( $bg ); ?>; margin: 0; max-width: 100%; padding: 0; width: 100%;
            }
            img {
                border: 0; outline: none; text-decoration: none;
            }
            h1 {
                font-size: 24px; line-height: 1.2;
            }
            h2 {
                font-size: 22px; line-height: 1.2;
            }
            h3 {
                font-size: 20px; line-height: 1.1;
            }
            p {
                font-size: 16px; line-height: 1.4;
            }
        </style>
    </head>

    <body style="background: <?php echo esc_attr( $bg ); ?>; color:<?php echo esc_attr( $text ); ?>; margin: 0; max-width: 100%; padding: 0; width: 100%" bgcolor="<?php echo esc_attr( $bg ); ?>">
        <table style="background: <?php echo esc_attr( $bg ); ?>;color:<?php echo esc_attr( $text ); ?>; margin-left: auto; margin-right: auto; max-width: 768px; padding: 0 20px; width: 100%" bgcolor="<?php echo esc_attr( $bg ); ?>">
            <tr>
                <td>
                    <table class="tc" style="background: <?php echo esc_attr( $bg ); ?>; color:<?php echo esc_attr( $text ); ?>; margin-left: auto; margin-right: auto; max-width: 768px; text-align: center; width: 100%" bgcolor="<?php echo esc_attr( $bg ); ?>">
                        <tr>
                            <td>
                                <a href="https://themes.email">
                                    <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" style="border: 0; display: inline-block; margin: 20px 0; outline: none; text-decoration: none; height: 30px;" height="30" alt="Logo" />';
                                        }
                                    ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table style="background: <?php echo esc_attr( $body ); ?>; color:<?php echo esc_attr( $text ); ?>; border-width: 1px;border-style: solid; border-color:#ccc; border-collapse: separate; border-radius: 3px; margin-left: auto; margin-right: auto; max-width: 768px; padding: 60px 40px; width: 100%" bgcolor="<?php echo esc_attr( $body ); ?>">
                        <tr class="tc" style="text-align: left" align="left">
                            <td id="emailcontent" class="f18" style="font-size: 16px; font-family:Avenir,Roboto,Helvetica,Arial,sans-serif; color:<?php echo esc_attr( $text ); ?>;">
                                <!--  Here Goes Content: Start  -->
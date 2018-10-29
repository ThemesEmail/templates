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
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="format-detection" content="telephone=no">
        <style>
            body, p {
                font-family: Helvetica,arial,sans-serif;
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
                color: <?php echo esc_attr( $text ); ?>;
            }
            h1 { font-size: 20px; line-height: 1.2;}
            h2 {font-size: 18px; line-height: 1.2;}
            h3 {font-size: 16px; line-height: 1.1;}
            h4 {font-size: 14px; line-height: 1.1;}
            p {font-size: 13px; line-height: 1.4;}
            table {
                border-collapse: collapse;
                border-spacing: 0;
                border: 0;
                padding: 0;
            }

            .content {
                width: 600px;
            }

            .no_text_resize {
                -moz-text-size-adjust: none;
                -webkit-text-size-adjust: none;
                -ms-text-size-adjust: none;
                text-size-adjust: none;
            }

            /* Media Queries */
            @media all and (max-width: 600px) {

                table[class="content"] {
                    width: 100% !important;
                }

                td[class="grid-col"] {
                    padding-left: 18px !important;
                    padding-right: 18px !important;
                }

                table[class="col-layout"] {
                    width: 100% !important;
                }

                td[class="col-nav-items"] {
                    display: inline-block !important;
                    padding-left: 0 !important;
                    padding-right: 10px !important;
                    background: none !important;
                }
            }

        </style>
    </head>
    <body border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="<?php echo esc_attr( $bg ); ?>" style="margin: 0;">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="<?php echo esc_attr( $bg ); ?>">
            <tr>
                <td style="padding-right: 10px; padding-left: 10px;">
                    <!-- Outlook Hack (doesn't support max-width property until 2013) -->
                    <!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo esc_attr( $bg ); ?>">
<tr>
<td>
<![endif]-->
                    <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo esc_attr( $bg ); ?>" style="width: 600px; max-width: 600px;">
                        <tr>
                            <td width="33%" valign="middle" style="text-align:left; padding:20px 0 10px 0;">
                                <a href="https://themes.email/">
                                    <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="136" height="22" style="width:136px; height:22px;" />';
                                        }
                                    ?>
                                </a>
                            </td>
                            <td width="66%" valign="middle" style="font-family: Helvetica,arial,sans-serif; text-align: right; padding-top: 12px; vertical-align: middle;"></td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
                </td>
            </tr>
            <tr>
                <td>
                    <!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo esc_attr( $body ); ?>">
<tr>
<td>
<![endif]-->
                    <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="<?php echo esc_attr( $bg ); ?>" style="width: 600px; max-width: 600px;">
                        <tr>
                            <td colspan="2" style="background: <?php echo esc_attr( $body ); ?>; border-radius: 8px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="font-family: Helvetica,arial,sans-serif;">
                                            <tr class="">
                                                <td id="emailcontent" class="grid-col" style="font-family: Helvetica,arial,sans-serif; padding: 32px 40px; color: <?php echo esc_attr( $text ); ?>; font-weight: 400; font-size: 13px; line-height: 21px;">

                                                    <!--  Here Goes Content: Start  -->
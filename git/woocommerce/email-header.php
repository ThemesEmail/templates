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
<html <?php language_attributes(); ?> bgcolor=" <?php echo esc_attr( $bg ); ?>" style="background-color: <?php echo esc_attr( $bg ); ?>">

    <head>
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width" name="viewport" />
        <style type="text/css">
            p:first-of-type {margin-top:0 !important}
            p:last-of-type {margin-bottom:0 !important}
            a.btn:hover {background-color: <?php echo esc_attr( $bg ); ?> !important}
            table#footer td a:link {color:#7B858B !important;font-weight:bold !important;text-decoration:none !important;font-size:12px !important}
            table#footer td a:visited {color:#7B858B !important;font-weight:bold !important;text-decoration:none !important;font-size:12px !important}
            table#footer td a:hover {color:#7B858B !important;font-weight:bold !important;text-decoration:none !important;font-size:12px !important}
            table#footer td a:active {color:#7B858B !important;font-weight:bold !important;text-decoration:none !important;font-size:12px !important}
            table#footer td a:hover {text-decoration:underline !important}
            table#footer td a:active {text-decoration:underline !important}
            h1 { font-size: 22px; line-height: 1.2;}
            h2 {font-size: 20px; line-height: 1.2;}
            h3 {font-size: 18px; line-height: 1.1;}
            h4 {font-size: 16px; line-height: 1.1;}
            h5 {font-size: 14px; line-height: 1.1;}
            h6 {font-size: 12px; line-height: 1.1;}
            p {font-size: 13px; line-height: 1.4;}
            
            @media only screen and (max-width:600px)  {
                table[class~="container"] { width: 100% !important; }
            }
            
        </style>
    </head>

    <body bgcolor=" <?php echo esc_attr( $bg ); ?>" height="100% !important" style="-webkit-font-smoothing:antialiased; -webkit-text-size-adjust:none; width:100% !important; height:100% !important; font-family:Helvetica,Arial,sans-serif; background-color: <?php echo esc_attr( $bg ); ?>; color:<?php echo esc_attr( $text ); ?>;"
          width="100% !important">
        <table cellpadding="0" cellspacing="0" class="container" id="container" style="margin:0 auto; width:600px" width="600">
            <tr>
                <td class="outer" style="vertical-align:top; padding:64px 10px">
                    <table cellpadding="0" cellspacing="0" class="container" id="header" style="margin:0 auto; width:600px" width="600">
                        <tr>
                            <td align="center" bgcolor="#1D2C36" style="vertical-align:top; background-color:#1D2C36; text-align:center; padding:50px; border-top-left-radius:3px; border-top-right-radius:3px">
                                <a href="https://themes.email" target="_blank" title="ThemesEmail">
                                       <?php
                                            if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                            echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="70" style="max-width:100%" />';
                                            }
                                        ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="container" id="body" style="margin:0 auto; width:600px" width="600">
                        <tr>
                            <td bgcolor="<?php echo esc_attr( $body ); ?>" class="body" style="vertical-align:top; padding:50px 64px; border-left-width:1px;border-left-style:solid;border-left-color:#E6E8E9; border-right-width:1px;border-right-style:solid;border-right-color:#E6E8E9; border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#E6E8E9; color:<?php echo esc_attr( $text ); ?>;background-color:<?php echo esc_attr( $body ); ?>; border-bottom-left-radius:3px; border-bottom-right-radius:3px">
                                <table cellpadding="0" cellspacing="0" id="body-inner" style="width: 100%;" width="100%">
                                    <tr>
                                        <td id="emailcontent" class="intro-copy" style="vertical-align:top; padding-bottom:30px; font-family:Helvetica,Arial,sans-serif;font-size: 13px;color:<?php echo esc_attr( $text ); ?>;">
                                            <!--  Here Goes Content: Start  -->
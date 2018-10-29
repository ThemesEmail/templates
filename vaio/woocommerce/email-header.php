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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <style type="text/css">
            body { margin: 0 !important; padding: 0 !important; -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; }
            p { margin: 0px !important; padding: 0px !important; }
            table { border-collapse: collapse; mso-table-lspace: 0px; mso-table-rspace: 0px; }
            td, a, span { border-collapse: collapse; mso-line-height-rule: exactly; }
            .ExternalClass * { line-height: 100%; }
            div { line-height: inherit !important; }
            .blue a {text-decoration: underline;color: <?php echo esc_attr( $base ); ?>;}
            .em_link a {text-decoration: underline; color:<?php echo esc_attr( $base ); ?>;}
            td[class=em_aside] { padding-left: 10px !important; padding-right: 10px !important; }
            @media only screen and (min-width:481px) and (max-width:600px) {
                table[class=em_wrapper] { width: 100% !important; }
                td[class=em_aside] { padding-left: 10px !important; padding-right: 10px !important; }
                td[class=em_hide], table[class=em_hide], span[class=em_hide], br[class=em_hide] { display: none !important; }
                img[class=em_full_img] { width: 100% !important; height: auto !important; max-width: 100% !important; }
                td[class=em_align_cent] { text-align: center !important; }
                td[class=fix_h] {	height: 25px !important;}
                td[class=em_product_side]{width:20px !important;}
                td[class=em_product_name]{ font-size:13px !important}
                h1 { font-size: 20px; line-height: 1.2;}
                h2 {font-size: 18px; line-height: 1.2;}
                h3 {font-size: 16px; line-height: 1.1;}
                h4 {font-size: 15px; line-height: 1.1;}
                h5 {font-size: 14px; line-height: 1.1;}
                p {font-size: 13px; line-height: 1.4;}
            }
            @media only screen and (max-width:480px) {
                table[class=em_wrapper] { width: 100% !important; }
                td[class=em_aside] { padding-left: 10px !important; padding-right: 10px !important; }
                td[class=em_hide], table[class=em_hide], span[class=em_hide], br[class=em_hide] { display: none !important; }
                img[class=em_full_img] { width: 100% !important; height: auto !important; max-width: 100% !important; }
                td[class=em_align_cent] { text-align: center !important; }
                td[class=fix_h] {height: 25px !important;}
                td[class=em_product_side]{width:10px !important;}
                td[class=em_product_name]{ font-size:15px !important; letter-spacing:normal !important}
            }
        </style>
    </head>

    <body style="margin:0px; padding:0px;" bgcolor="<?php echo esc_attr( $body ); ?>">
        <!--Full width table start-->
        <table width="100%" border="0" align="center" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0">
            <!-- main content -->
            <tr>
                <td align="center" bgcolor="<?php echo esc_attr( $bg ); ?>" class="em_aside" style="background-color:
<?php echo esc_attr( $bg ); ?>;">
                    <table width="600" border="0" cellspacing="0" cellpadding="0" class="em_wrapper">
                        <tr>
                            <td height="26" style="line-height:0px; font-size:0px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a href="https://themes.email" target="_blank">
                                   <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" border="0" width="90" style="display:block;max-width:90px;" />';
                                        }
                                    ?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td height="26" style="line-height:0px; font-size:0px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td bgcolor="<?php echo esc_attr( $body ); ?>">
                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center">
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td id="emailcontent" style="padding-top:40px; padding-left:20px; padding-right:20px; padding-bottom:20px; font-family: Arial,Helvetica,sans-serif;font-size:13px;letter-spacing:.08em; color:<?php echo esc_attr( $text ); ?>;" align="left">
                                                        <!--  Here Goes Content: Start  -->
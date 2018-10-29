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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            a{
                text-decoration:none !important;
                color: <?php echo esc_attr( $base ); ?> !important;
            }
            a:visited{
                color:inherit !important;
            }
            a.btnWhite{
                color:#ffffff !important;
            }
            a.btnWhite:visited{
                color:inherit !important;
            }
            @media only screen and (max-width: 480px){
                .largerType16{
                    font-size:17px !important;
                    line-height:27px !important;
                }

            }	@media only screen and (max-width: 480px){
                .utilityLink{
                    max-width:600px !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .utilityLinkContent{
                    background-color:<?php echo esc_attr( $text ); ?> !important;
                    border-bottom-width:1px !important;
                    border-bottom-style:solid !important;
                    border-bottom-color: #737576 !important;
                    display:block !important;
                    font-size:20px !important;
                    padding:22px 0 !important;
                    text-align:center !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .utilityLinkContent a{
                    color:#ffffff !important;
                    display:block !important;
                    text-decoration:none !important;
                }

            }	@media only screen and (max-width: 480px){
                .footerLink{
                    font-size:18px !important;
                }

            }	@media only screen and (max-width: 480px){
                .social{
                    width:40px !important;
                    height:auto !important;
                }

            }
        </style>
    </head>
    <body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; margin: 0; padding: 0; width: 100% !important; background: <?php echo esc_attr( $bg ); ?>;">
        <!--[if (gte mso 9)|(IE)]>
<center>
<table>
<tr>
<td width="600">
<![endif]-->

        <div class="block">
            <table width="100%" style="min-width: 320px; max-width: 600px; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" cellpadding="0" cellspacing="0" border="0" align="center">
                <tbody>
                    <tr>
                        <td align="center" style="border-collapse: collapse;">
                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $bg ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="border-collapse: collapse;">

                                                <table width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0" border="0" align="center" hlitebg="edit" shadow="edit" style="border-width: 1px;border-style: solid;border-color: #E4E4E4; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%" height="36" style="border-collapse: collapse;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" cellpadding="0" cellspacing="0" border="0" align="center" height="25" style="border-collapse: collapse;">   
                                                               <?php
                                                                    if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                                    echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" border="0" style="margin: 0; padding: 0;width: 160px; height: auto; max-width: 160px; display: block; outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic;" />';
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="36" style="border-collapse: collapse;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="border-collapse: collapse;">
                                                <table width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0" border="0" align="center" hlitebg="edit" shadow="edit" style="border-right-width: 1px;border-right-style: solid; border-right-color: #E4E4E4; border-left-width: 1px; border-left-style: solid; border-left-color: #E4E4E4; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%" height="50" style="border-collapse: collapse;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-collapse: collapse;">
                                                                <table width="85%" align="center" cellspacing="0" cellpadding="0" border="0" style="margin-left: auto; margin-right: auto; margin-bottom: 0; margin-top: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="100%" height="15" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td id="emailcontent" width="100%" cellpadding="0" cellspacing="0" border="0" align="left" style="text-align: left; border-collapse: collapse;line-height:1.38;margin-top:0pt;margin-bottom:0pt;color:<?php echo esc_attr( $text ); ?>;font-family:arial; font-size:13px; vertical-align:baseline;">
                                                                                <!-- Here Goes Content: Start -->
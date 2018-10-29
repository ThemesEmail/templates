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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            /* RESET */
            p{margin:10px 0; padding:0;}
            table{border-collapse:collapse;}
            h1, h2, h3, h4, h5, h6{display:block;}
            img, a img{border:0; height:auto; outline:none; text-decoration:none;}
            body, #bodyTable, #bodyCell{height:100%; margin:0; padding:0; width:100%;}

            /* CLIENT SPECIFIC */
            img{-ms-interpolation-mode:bicubic;}
            table{mso-table-lspace:0pt; mso-table-rspace:0pt;}
            .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
            p, a, li, td, blockquote{mso-line-height-rule:exactly;} 
            a[href^="tel"], a[href^="sms"]{color:inherit; cursor:default; text-decoration:none;}
            p, a, li, td, body, table, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass td, .ExternalClass div, .ExternalClass span, .ExternalClass font{line-height:100%;}
            a[x-apple-data-detectors]{color:inherit !important; text-decoration:none !important; font-size:inherit !important; font-family: Helvetica,Arial,sans-serif !important; font-weight:inherit !important; line-height:inherit !important;}
            #footerContent a{color:#B7B7B7 !important;}

            /* MOBILE */
            @media only screen and (max-width:480px){
                body{width:100% !important; min-width:100% !important;} 
                h1{font-size:18px !important;}
                #templateHeader{padding-right:20px !important; padding-left:20px !important;}
                #headerContainer{padding-right:0 !important; padding-left:0 !important;}
                #headerTable{border-top-left-radius:0 !important; border-top-right-radius:0 !important;}
                #headerTable td{padding-top:30px !important;}
                #bodyContainer{padding-right:20px !important; padding-left:20px !important;}
                #bodyContent{padding-right:0 !important;}
                #footerContent p{border-bottom:1px solid #E5E5E5; font-size:11px !important; padding-bottom:40px !important; line-height:13px !important;}
                .utilityLink{border-bottom:1px solid #E5E5E5; display:block; font-size:13px !important; padding-top:10px; padding-bottom:10px; text-decoration:none !important;}
                .mobileHide{display:none; visibility:hidden;}
            }

            @media screen{
                *, td{font-family: Helvetica,Arial,sans-serif !important;}
            }
        </style>
    </head>
    <body bgcolor="<?php echo esc_attr( $bg ); ?>" style="background-color:<?php echo esc_attr( $bg ); ?>;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" bgcolor="<?php echo esc_attr( $bg ); ?>" style="background-color:<?php echo esc_attr( $bg ); ?>;">
                <tbody>
                    <tr>
                        <td align="center" valign="top" id="bodyCell">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td align="center" bgcolor="<?php echo esc_attr( $base ); ?>" valign="top" id="templateHeader" style="background-color:<?php echo esc_attr( $base ); ?>; padding-right:30px; padding-left:30px;">
                                            <!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="400">
<tr>
<td align="center" valign="top" width="400">
<![endif]-->
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:400px;" class="emailContainer">
                                                <tbody>
                                                    <tr>
                                                        <td align="center" valign="top" id="logoContainer" style="padding-top:30px; padding-bottom:30px;">
                                                           
                                                           <?php
                                                                if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                                echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" height="40" width="40" style="color:<?php echo esc_attr( $base ); ?>; padding:0; margin:0; text-align:center;" />';
                                                                }
                                                           ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--[if gte mso 9]>
</td>
</tr>
</table>
<![endif]-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" bgcolor="<?php echo esc_attr( $base ); ?>" valign="top" id="headerContainer" style="background-color:<?php echo esc_attr( $base ); ?>; padding-right:30px; padding-left:30px;">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
<tr>
<td align="center" valign="top" width="640">
<![endif]-->
                                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:640px;" class="emailContainer">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="top">
                                                                            <table align="center" bgcolor="<?php echo esc_attr( $bg ); ?>" border="0" cellpadding="0" cellspacing="0" width="100%" id="headerTable" style="background-color:<?php echo esc_attr( $bg ); ?>; border-collapse:separate; border-top-left-radius:5px; border-top-right-radius:5px;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" valign="top" width="100%" style="padding-top:40px; padding-bottom:0;">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if gte mso 9]>
</td>
</tr>
</table>
<![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" id="templateBody" bgcolor="<?php echo esc_attr( $bg ); ?>" style="background-color:<?php echo esc_attr( $bg ); ?>;">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="700">
<tr>
<td align="center" valign="top" width="700">
<![endif]-->
                                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:700px;" class="emailContainer">
                                                                <tbody>
                                                                    <tr>

                                                                        <td valign="top" width="100%" style="padding-right:70px; padding-left:70px; padding-bottom:20px" id="bodyContainer">
                                                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td id="emailcontent" align="left" valign="top" style="color: <?php echo esc_attr( $text ); ?>;font-family: Helvetica,Arial,sans-serif;font-size: 13px;font-weight: 400;line-height: 16px;padding: 10px;margin: 0;text-align: left;">
                                                                                            <!-- Here Goes Content: Start -->
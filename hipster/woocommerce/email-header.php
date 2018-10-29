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
        <!--[if gte mso 15]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="date=no">
        <meta name="format-detection" content="address=no">
        <meta name="format-detection" content="telephone=no">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>

        <style type="text/css" media="screen">
            /* Linked Styles */
            body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:<?php echo esc_attr( $bg ); ?>; -webkit-text-size-adjust:none }
            a { color:<?php echo esc_attr( $base ); ?>; text-decoration:none }
            p { padding:0 !important; margin:0 !important } 
            img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
            .text { color:<?php echo esc_attr( $text ); ?>; text-decoration:none }
            .text-center { color:<?php echo esc_attr( $base ); ?>; text-decoration:none }
            h1 {font-size: 22px;}
            h2 {font-size: 20px;}
            h3 {font-size: 18px;}
            p {font-size: 13px;}

            /* Mobile styles */
            @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) { 
                div[class='mobile-br-5'] { height: 5px !important; }
                div[class='mobile-br-10'] { height: 10px !important; }
                div[class='mobile-br-15'] { height: 15px !important; }

                th[class='m-td'], 
                td[class='m-td'], 
                div[class='hide-for-mobile'], 
                span[class='hide-for-mobile'] { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

                span[class='mobile-block'] { display: block !important; }

                div[class='wgmail'] img { min-width: 320px !important; width: 320px !important; }

                div[class='img-m-center'] { text-align: center !important; }
                div[class='text'] { text-align: center !important; }

                div[class='fluid-img'] img,
                td[class='fluid-img'] img { width: 100% !important; max-width: 480px !important; height: auto !important; }

                div[class='fluid-img2'] img,
                td[class='fluid-img2'] img { width: 100% !important; max-width: 300px !important; height: auto !important; }

                table[class='mobile-shell'] { width: 100% !important; min-width: 100% !important; }
                table[class='center'] { margin: 0 auto; }

                td[class='column'],
                th[class='column'] { float: left !important; width: 100% !important; display: block !important; }

                td[class='td'] { width: 100% !important; min-width: 100% !important; }
                td[class='m-auto'] { width: auto !important; }

                td[class='content-spacing'] { width: 15px !important; }

                span[class='m-bold'] { font-weight: bold !important; }
                img[class='mobile-image'] { width: 100% !important; height: auto !important; display: block !important; }

                a[href^="tel"], a[href^="sms"] { text-decoration: none; color: black; pointer-events: none; cursor: default; }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] { text-decoration: default; color: orange !important; pointer-events: auto; cursor: default; }
            }
        </style>
    </head>

    <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:<?php echo esc_attr( $bg ); ?>; -webkit-text-size-adjust:none">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="<?php echo esc_attr( $bg ); ?>">
            <tbody>
                <tr>
                    <td align="center" valign="top">
                        <table width="640" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td class="td" style="width:640px; min-width:640px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">
                                                        <!-- Header -->
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="<?php echo esc_attr( $base ); ?>">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="26" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center">
                                                                            <a href="#" target="_blank">
                                                                                <?php
                                                                                    if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                                                    echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" border="0" width="145" height="40" />';
                                                                                    }
                                                                                ?>
                                                                            </a>
                                                                        </div>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="16" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>


                                                                        <!-- Navigation links -->
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center">
                                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="text-nav" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:left">
                                                                                                            <a href="https://themes.email/magento.html" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">Magento</span></a>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="75">
                                                                                                        <div class="text-nav-center" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:center">|</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="text-nav" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:left">
                                                                                                            <a href="https://themes.email/prestashop.html" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">Prestashop</span></a>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="75">
                                                                                                        <div class="text-nav-center" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:center">|</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="text-nav" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:left">
                                                                                                            <a href="https://themes.email/woocommerce.html" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">WooCommerce</span></a>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="75">
                                                                                                        <div class="text-nav-center" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:center">|</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="text-nav" style="color:#ffffff; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:16px; line-height:20px; text-align:left">
                                                                                                            <a href="#" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">EDD</span></a>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="8" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <!-- END Navigation links -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END Header -->

                                                        <!-- Main -->
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="<?php echo esc_attr( $body ); ?>" style="background-color:<?php echo esc_attr( $body ); ?>;">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <!-- Content -->
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="<?php echo esc_attr( $body ); ?>" style="background-color:<?php echo esc_attr( $body ); ?>;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
                                                                                    <td>
                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td height="20" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>

                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:13pt; line-height:16pt; text-align:left; width:100%; min-width:100%; color:<?php echo esc_attr( $text ); ?>;">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td id="emailcontent" class="text-top" style="color:<?php echo esc_attr( $text ); ?>; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:13px; line-height:16px; text-align:left">

                                                                                                        <!-- Here Goes Content: Start -->
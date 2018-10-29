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
<html <?php language_attributes(); ?> style="background-color:<?php echo esc_attr( $bg ); ?>;">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            h1 {font-size: 20px;}
            h2 {font-size: 18px;}
            h3 {font-size: 16px;}
            p {font-size: 13px;}    
            table.two-columns table.button :hover{
                background: rgba(48,55,59,0.80);
                border-radius:3px;
                transition:background 200ms}
            table.two-columns table.button td:hover a{
                color:<?php echo esc_attr( $base ); ?> !important;
                transition:color 200ms}
            table.two-columns table.button-alt :hover{
                background: rgba(255,255,255,0.80);
                border-radius:3px;
                transition:background 200ms}
            table.two-columns table.button-alt td:hover a{
                color:<?php echo esc_attr( $base ); ?> !important;
                transition:color 200ms}
            @media all and (max-width: 650px) {
                table.frame {
                    min-width: auto !important;
                    width: 100% !important;
                }
                table.secondary-frame {
                    min-width: auto !important;
                    width: 100% !important;
                }
                td.hide {
                    display: none !important;
                }
                table.nav {
                    width: 90% !important;
                }
                table.nav td {
                    width: 33.33333% !important;
                    padding-left:0px !important;
                    padding-right:0px !important;
                    white-space: nowrap;
                }
                table.alert {
                    width: 90% !important;
                }
                table.divider {
                    width: 90% !important;
                }
                table.secondary-divider {
                    width: 90% !important;
                }
                table.two-columns {
                    width: 90%;
                }
                table.two-columns th.top {
                    display: block;
                    width: 100% !important;
                    text-align: center;
                }
                table.two-columns th.middle {
                    display: none !important;
                }
                table.two-columns th.bottom {
                    display: block;
                    width: 100% !important;
                    padding-top: 25px !important;
                }
                table.two-columns img {
                    width: 100% !important;
                    max-width: 100% !important;
                }
                table.slogan {
                    width: 100% !important;
                }
                table.slogan table {
                    width: 90% !important;
                }
                table.slogan img,
                table.slogan p {
                    vertical-align: middle;
                }
                table.footer-divider {
                    width: 90% !important;
                }
            }
        </style>
    </head>

    <body style="margin: 0px; padding: 0px; background-color:<?php echo esc_attr( $bg ); ?>;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="frame" style="width:100%;max-width:650px;margin:0 auto;text-align:center;background-color:<?php echo esc_attr( $body ); ?>;width:650px;max-width:100%;" bgcolo="<?php echo esc_attr( $body ); ?>">
            <tbody>
                <tr>
                    <td align="center">
                        <div class="spacer" style="line-height:30px;height:30px;">
                        </div>
                        <a href="#" style="text-decoration:none;" target="_blank">
                           <?php
                                if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" style="display:block;border:none;" width="40" height="40" />';
                                }
                            ?>
                        </a>
                        <div class="spacer" style="line-height:40px;height:40px;">
                        </div>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="nav" style="width:100%;max-width:650px;margin:0 auto;text-align:center;">
                            <tbody>
                                <tr>
                                    <td style="padding-left:24px;padding-right:24px;font-size:14px;line-height:20px;">
                                        <a href="https://themes.email/magento.html" style="font-family: Avenir,Verdana,Geneva,sans-serif;color:<?php echo esc_attr( $text ); ?>;margin:0;font-weight:400;text-decoration:none;" target="_blank">Magento</a>
                                    </td>
                                    <td style="padding-left:24px;padding-right:24px;font-size:14px;line-height:20px;">
                                        <a href="https://themes.email/prestashop.html" style="font-family: Avenir,Verdana,Geneva,sans-serif;color:<?php echo esc_attr( $text ); ?>;margin:0;font-weight:400;text-decoration:none;" target="_blank">Prestashop</a>
                                    </td>
                                    <td class="hide" style="padding-left:24px;padding-right:24px;font-size:14px;line-height:20px;">
                                        <a href="https://themes.email/woocommerce.html" style="font-family: Avenir,Verdana,Geneva,sans-serif;color:<?php echo esc_attr( $text ); ?>;margin:0;font-weight:400;text-decoration:none;" target="_blank">WooCommerce</a>
                                    </td>
                                    <td class="hide" style="padding-left:24px;padding-right:24px;font-size:14px;line-height:20px;">
                                        <a href="https://themes.email/" style="font-family: Avenir,Verdana,Geneva,sans-serif;color:<?php echo esc_attr( $text ); ?>;margin:0;font-weight:400;text-decoration:none;" target="_blank">EasyDigitalDownloads</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <div class="spacerx05" style="line-height:12px;height:12px;">
                        </div>
                        <table class="secondary-divider" style="width:100%;max-width:650px;margin:0 auto;text-align:center;border-top:1px solid;border-color:rgb(255,255,255); border-color:rgba(255,255,255,0.3);width:590px;height: 25px;">
                            <tbody>
                                <tr>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="primary-copy" style="margin:0 auto;text-align:center;width:88%;">
                            <tbody>
                                <tr>
                                    <td id="emailcontent" align="left" style="overflow: visible;font-family: Avenir,Verdana,Geneva,sans-serif;color:<?php echo esc_attr( $text ); ?>;margin:0;font-weight:400;text-decoration:none;font-size:13px;line-height:14px;" width="500">
                                        <!-- Here Goes Content: Start -->
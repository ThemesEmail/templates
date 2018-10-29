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
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" style="-webkit-text-size-adjust: none;">

    <head style="-webkit-text-size-adjust: none;">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="-webkit-text-size-adjust: none;">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css" style="-webkit-text-size-adjust: none;">
            *{
                -webkit-text-size-adjust:none;
            }
            .subhead{
                font-size:11px !important;
            }
            h1 { font-size: 20px; line-height: 1.2;}
            h2 {font-size: 18px; line-height: 1.2;}
            h3 {font-size: 16px; line-height: 1.1;}
            h4 {font-size: 14px; line-height: 1.1;}
            h5 {font-size: 13px; line-height: 1.1;}
            h6 {font-size: 12px; line-height: 1.1;}

            @media screen and (max-width: 479px){
                .subhead .extra{
                    display:none !important;
                }

            }	@media screen and (max-width: 479px){
                .sale-list{
                    font-size:10px;
                }

            }	@media screen and (min-width: 480px){
                .social img{
                    width:19px !important;
                    padding:5px 7px !important;
                }

            }	@media screen and (min-width: 480px){
                .social img.pinterest{
                    width:21px !important;
                }

            }	@media screen and (min-width: 480px){
                .app-link{
                    width:185px !important;
                }

            }
        </style>
    </head>

    <body style="margin: 0;padding: 0;background: <?php echo esc_attr( $bg ); ?>;-webkit-text-size-adjust: none;">
        <table width="100%" style="min-width: 300px;max-width: 600px;background: <?php echo esc_attr( $body ); ?>;font-family: helvetica,arial,sans-serif;font-weight: 200;letter-spacing: 1px;line-height: 1.6em;color: <?php echo esc_attr( $text ); ?>;font-size: 13px;border-collapse: collapse;-webkit-text-size-adjust: none;"
               class="wrapper" align="center">
            <tr style="background-color: <?php echo esc_attr( $base ); ?>;-webkit-text-size-adjust: none;">
                <td style="-webkit-text-size-adjust: none; padding: 15px 0px;">
                    <table width="96%" style="max-width: 600px;padding: 8px 0px;table-layout: fixed;-webkit-text-size-adjust: none;"
                           align="center">
                        <tr style="-webkit-text-size-adjust: none;">
                            <td align="left" style="-webkit-text-size-adjust: none;"> <span style="font-size: 0;line-height: 0;display: none;visibility: hidden;-webkit-text-size-adjust: none;">Discover and buy amazing templates.</span>

                                <a
                                   href="https://themes.email/"
                                   style="color: <?php echo esc_attr( $body ); ?>;font-weight: 500;text-decoration: none;display: inline-block;margin-left: 10px;-webkit-text-size-adjust: none;">
                                   <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="100" />';
                                        }
                                    ?>
                                </a>
                            </td>
                            <td align="right" style="-webkit-text-size-adjust: none; vertical-align: middle;">
                                <img src="https://s3.amazonaws.com/templates.themes.email/zala/first.png"
                                     style="width: 118px;margin-right: 10px;-webkit-text-size-adjust: none;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="background: <?php echo esc_attr( $body ); ?>;border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: #f2f2f2;-webkit-text-size-adjust: none;">
                <td style="-webkit-text-size-adjust: none;">
                    <table width="96%" style="max-width: 600px;text-align: center;font-size: 10px;-webkit-text-size-adjust: none;"
                           class="subhead" align="center">
                        <tr style="-webkit-text-size-adjust: none;">
                            <td style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/magento.html" style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">Magento</a>
                            </td>
                            <td style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/prestashop.html" style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">Prestashop</a>
                            </td>
                            <td style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/woocommerce.html" style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">Woocommerce</a>
                            </td>
                            <td class="extra" style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/"
                                   style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">Wordpress</a>
                            </td>
                            <td style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/" style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">EDD</a>
                            </td>
                            <td class="extra" style="-webkit-text-size-adjust: none;">
                                <a href="https://themes.email/" style="text-decoration: none;color: #58595b;white-space: nowrap;display: block;padding: 2px 5px;-webkit-text-size-adjust: none;">Joomla!</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr style="-webkit-text-size-adjust: none;">
                <td style="-webkit-text-size-adjust: none;">
                    <table width="100%" align="center" cellspacing="0" style="max-width: 580px;padding: 0px 10px;table-layout: fixed;-webkit-text-size-adjust: none;">
                        <tr style="-webkit-text-size-adjust: none;">
                            <td id="emailcontent" style="padding-top: 20px; padding-bottom:20px; -webkit-text-size-adjust: none; font-family: helvetica,arial,sans-serif; font-size: 13px;">

                                <!--  Here Goes Content: Start  -->
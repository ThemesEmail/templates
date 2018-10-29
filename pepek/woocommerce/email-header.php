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
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style type="text/css">
            .ExternalClass {width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%;
            }
            body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
            table td {border-collapse:collapse;}
            @media (max-width: 480px) {
                div, p, a, li, td { -webkit-text-size-adjust:none; }
                h1 { font-size: 32px; line-height: 1.2;}
                h2 {font-size: 20px; line-height: 1.2;}
                h3 {font-size: 18px; line-height: 1.1;}
                h4 {font-size: 16px; line-height: 1.1;}
                h5 {font-size: 14px; line-height: 1.1;}
                h6 {font-size: 12px; line-height: 1.1;}
                *[class~=p] {font-size:13px !important;line-height:16px !important}
                *[class~=m_hide] {display:none !important}
                *[class~=m_w280] {width:280px !important;max-width:280px !important}
                *[class~=m_w320] {width:320px !important;max-width:320px !important}
                *[class~=m_h40] {height:40px !important}
                *[class~=m_wh40] {width:40px !important; height:40px !important}
                *[class~=m_plr0] {padding-left:0 !important;padding-right:0 !important}
                *[class~=m_pt0] {padding-top:0px !important}
                *[class~=m_pt20] {padding-top:20px !important}
                *[class~=m_pb2] {padding-bottom:2px !important}
                *[class~=m_pb25] {padding-bottom:25px !important}
                *[class~=m_pr2] {padding-right:2px !important}
                *[class~=m_pr20] {padding-right:20px !important}
                *[class~=m_pl20] {padding-left:20px !important}
                *[class~=m_overflow280] {max-width:280px !important;overflow:hidden !important;text-overflow:ellipsis}
                *[class~=m_b0] {border:none !important}
                *[class~=m_bg_white] {background-color:<?php echo esc_attr( $body ); ?> !important}
            }
        </style>
    </head>

    <body style="background-color:<?php echo esc_attr( $bg ); ?>">
        <table class="m_bg_white" width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $bg ); ?>">
            <tr>
                <td class="m_w320 m_pt0" width="580" align="center" style="padding-top:20px">
                    <table class="m_w320 m_b0" height="40" width="580" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $body ); ?>">
                        <tr>
                            <td class="m_w280 m_pl20 m_pr20 m_pt20" width="580" align="left" style="padding:30px">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="m_h40" align="left" valign="bottom" height="50">
                                            <a href="https://themes.email/" title="Themes Email">                                               
                                               <?php
                                                    if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                    echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="50" height="50" border="0"  />';
                                                    }
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table class="m_bg_white" width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $bg ); ?>;">
            <tr>
                <td width="580" align="center" style="">
                    <table class="m_w320" width="580" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $body ); ?>">
                        <tr>
                            <td width="580" align="center" style="padding-bottom:50px">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $body ); ?>">
                                    <tr>
                                        <td class="m_w280 m_pl20 m_pr20" width="580" align="center" style="padding-right:30px; padding-left:30px;background-color:<?php echo esc_attr( $body ); ?>">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                                <tr>
                                                    <td class="m_pb25" align="left" valign="bottom" style="padding-bottom:35px">
                                                        <table class="m_w280" width="480">
                                                            <tr>
                                                                <td class="m_overflow280 " style="font-size:32px; line-height:36px;padding:0;font-family: helvetica,arial,sans-serif;font-weight:bold;color:<?php echo esc_attr( $text ); ?>;max-width:510px;overflow:hidden;text-overflow:ellipsis">
                                                                    the <span style="color:<?php echo esc_attr( $base ); ?>;">#1 marketplace</span> for Email Templates
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table class="" width=100% align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                                <tr>
                                                    <td class="m_pb25" valign="middle" style="padding-bottom:34px">
                                                        <div style="border-top-width:1px;border-top-style:solid; border-top-color:#dcdcdc;font-size:1px;line-height:1px;">&nbsp;</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="m_w280 m_pl20 m_pr20" width="580" align="center" style="padding-right:30px;padding-left:30px;background-color:<?php echo esc_attr( $body ); ?>">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                                <tr>
                                                    <td id="emailcontent" class="p" align="left" valign="bottom" style="padding-bottom:40px;font-family: helvetica,arial,sans-serif;font-size:13px;line-height:16px;color:<?php echo esc_attr( $text ); ?>">

                                                        <!--  Here Goes Content: Start  -->
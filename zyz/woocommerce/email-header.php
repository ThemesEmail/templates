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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <style type="text/css">
            #outlook a {
                padding: 0;
            }
            .ReadMsgBody {
                width: 100%;
            }
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%;
            }
            blockquote .original-only, .WordSection1 .original-only {
                display: none !important;
            }
            .appleLinkIgnore a {
                color: #222222;
                text-decoration: none;
            }
            .appleFooter a {
                color: #797979;
                text-decoration: none;
            }
            @media screen and (max-width: 630px) {
                table[class="wrapper"] {
                    width: 100% !important;
                }
                td[class="logo"] {
                    text-align: left !important;
                    padding: 0 !important;
                }
                td[class="logo"] img {
                    margin: 0 auto !important;
                    text-align: center !important;
                    display: block !important;
                }


                .mobile-hide {
                    display: none !important;
                    overflow: hidden !important;
                    float: left !important;
                    font-size: 1px !important;
                    line-height: 1px !important;
                    max-width: 0 !important;
                    opacity: 0 !important;
                    color: #ffffff !important;
                }
                .responsive-table {
                    width: 100% !important;
                }
                .text-padding-left {
                    padding-left: 5% !important;
                }
                .text-padding-right {
                    padding-right: 5% !important;;
                }
                .standard-line {
                    padding-top:10px; padding-right:0px; padding-bottom: 14px; padding-left: 0px !important;
                    line-height: 24px !important;
                }
                .list {
                    padding-top:5px; padding-right:22px; padding-bottom: 16px; padding-left: 0px;
                    line-height: 24px;
                }

                .mobile-no-padding {
                    padding: 0 !important;
                }
                .header {
                    height: 120px !important;
                }

                td[class="heading"] {
                    padding-top:35px; padding-right:0px; padding-bottom: 9px; padding-left: 0px !important;
                    font-size: 36px !important;
                    line-height: 48px !important;
                    text-align: left !important;
                }
                .label {
                    font-size: 12px !important;
                    line-height: 12px !important;
                    padding: padding-top:7px; padding-right:0px; padding-bottom: 5px; padding-left: 0px; !important;
                }

                .body-text-small {
                    color: <?php echo esc_attr( $text ); ?> !important;
                }

                .body-text {
                    color: <?php echo esc_attr( $text ); ?> !important;
                    text-align: left !important;
                    font-size: 13px !important;
                }


                .footer-links {
                    letter-spacing: 0 !important;
                    font-weight: 600 !important;
                    padding-top:34px; padding-right:55px; padding-bottom: 0px; padding-left: 55px !important;
                }

                .footer-copy {
                    font-size: 11px !important;
                    padding-top: 7px !important;
                    padding-bottom: 22px !important;
                }

                .footer img {
                    padding-top:5px; padding-right:0px; padding-bottom: 44px; padding-left: 0px !important;

                }

                td[class="mobile-wrapper"] {
                    padding-top:10px; padding-right:5%; padding-bottom: 15px; padding-left: 5% !important;
                }

                table[class="mobile-button-container"] {
                    margin: 0 auto !important;
                    width: 100% !important;
                } 
                .large-padding-bottom {
                    padding-bottom: 29px !important;
                }
                .header {
                    height: 120px !important;
                }
                .full-width img {
                    width: 100% !important;
                    height: auto !important;
                }
                .image-heading {
                    padding-left: 22px !important;
                }
                .two-column img {
                    width: 100% !important;
                    height: auto !important;
                }
                .list {
                    padding-top:5px; padding-right:22px; padding-bottom: 16px; padding-left: 0px !important;
                    line-height: 24px !important;
                }
                .mobile-show {
                    display: table-cell !important;
                    width: 100% !important;
                    height: auto !important;
                    line-height: 22px !important;
                    max-height: 616px !important;
                    max-width: 616px  !important;
                    opacity: 1 !important;
                    overflow: visible;
                }
                .mobile-show img {
                    display: block !important;
                    width: 100% !important;
                    height: auto !important;
                    line-height: 22px !important;
                    max-height: 616px !important;
                    max-width: 616px  !important;
                    opacity: 1 !important;
                    overflow: visible;
                }
                .left-column-text {
                    padding: 22px 5% !important;
                }
                .right-column-text {
                    padding: 22px 5% !important;
                }
            }
            table {
                border-collapse: collapse;
            }
        </style>
    </head>

    <body style=" background-color:<?php echo esc_attr( $bg ); ?>;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;height: 100% !important;margin: 0;padding: 0;width: 100% !important;" bgcolor="<?php echo esc_attr( $bg ); ?>"> 
        <span class="hidden remove-from-plain-text" style="display: none;font-size: 1px;line-height: 1px;max-width: 0;max-height: 0;min-width: 0;min-height: 0;height: 0;width: 0;opacity: 0;overflow: hidden;color: #ffffff;"></span>
        <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
        <table align="center" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;min-width: 100%" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td class="mobile-hide" height="44" bgcolor="<?php echo esc_attr( $bg ); ?>" colspan="3" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"></td>
                </tr>
                <tr>
                    <td class="mobile-hide spacer" width="58" bgcolor="<?php echo esc_attr( $bg ); ?>" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 10px;width: 1%;"></td>
                    <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <tbody>
                                <tr>
                                    <td height="115" align="center" class="mobile-no-padding header-wrapper" bgcolor="<?php echo esc_attr( $bg ); ?>" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="616" class="wrapper" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2" width="616" bgcolor="#DADADA" class="empty-cell" height="5" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-size: 5px;line-height: 5px;max-height: 5px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td height="110" bgcolor="#ffffff" class="logo" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                                        <table class="mobile-no-padding header" border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;height: 110px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="mobile-no-padding text-padding-left" height="110" width="180" align="left" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-left: 58px; vertical-align: middle;">
                                                                        <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $text ); ?>;">
                                                                           <?php
                                                                                if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                                                echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="161" height="23" border="0" style="padding-top: 3px;-ms-interpolation-mode: bicubic;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;" />';
                                                                                }
                                                                            ?>
                                                                        </a>
                                                                    </td>
                                                                    <td class="mobile-hide mobile-no-padding text-padding-right" width="450" height="110" align="right" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-right: 58px; vertical-align: middle;">
                                                                        <table border="0" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="right" class="category-wrapper" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-bottom: 2px;">
                                                                                        <span class="category-heading" style="color: #3e3e3e;text-decoration: none;text-transform: uppercase;padding-top:6px; padding-right:0px; padding-bottom: 5px; padding-left: 0px;letter-spacing: 2px;line-height: 22px;font-weight: 400;font-size: 11px;font-family: Helvetica,Arial,sans-serif;">the #1 marketplace</span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <tbody>
                                <tr>
                                    <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="616" class="gmail-spacer responsive-table" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                            <tbody>
                                                <tr>
                                                    <td style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="<?php echo esc_attr( $body ); ?>" class="text-padding-left text-padding-right large-padding-bottom" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-left: 58px;padding-bottom: 44px;padding-right: 58px;">
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="spacer" height="22" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 10px;width: 1%;"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="spacer" height="22" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 10px;width: 1%;"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id="emailcontent" align="left" class="standard-line body-text" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-top:6px; padding-right:0px; padding-bottom: 16px; padding-left: 0px;font-weight: 400;font-family: Helvetica,Arial,sans-serif;font-size: 13px;letter-spacing: 0.02em;color: <?php echo esc_attr( $text ); ?>;text-align: left;">
                                                                                        <!--  Here Goes Content: Start  -->
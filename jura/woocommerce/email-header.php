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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            a {
                text-decoration: none;
                color: <?php echo esc_attr( $base ); ?>;
            }
            .FullW {
                width: 100% !important;
            }
            /* Fix for unwanted underline in hotmail, yahoo and gmail */
            .ii a {
                text-decoration: none !important;
                color: transparent !important;
            }
            .ReadMsgBody .ExternalClass a:link {
                text-decoration: none !important;
                color: transparent !important;
            }
            .yshortcuts {
                text-decoration: none !important;
                color: transparent !important;
            }
            body {
                width: 100%;
                padding: 0px;
                margin: 0px;
            }
            table, td {
                border-collapse: collapse;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
            div, p, a, li, td {
                -webkit-text-size-adjust: none;
            }
            /*Fix for unwanted align colsplit when hovering on modules*/
            ul.editorSection li:hover {
                margin: 0 -1px !important;
            }

            @media screen and (max-width: 600px) {
                .nomob {
                    display: none !important;
                }
                table[class=nomob], td[class=nomob], tr[class=nomob], div[class=nomob], img[class=nomob] {
                    display: none !important;
                }
                table[class=resizedynamic], td[class=resizedynamic], td[class=resizedynamic] img {
                    width: 100% !important;
                    height: auto !important;
                }
                table[class=resizedynamic-content], td[class=resizedynamic-content], td[class=resizedynamic-content] img {
                    width: 85% !important;
                    height: auto !important;
                }
                table[class=dynamic-td], td[class=dynamic-td], td[class=dynamic-td] img {
                    width: 100% !important;
                }
                td[class=resizeheight40], td[class=resizeheight40] img, div[class=resizeheight40], div[class=resizeheight40] img {
                    height: 40px !important;
                }
                td [class=resizeheight-marginwebversion], td [class=resizeheight-marginwebversion] img {
                    height: 20px !important;
                }
                td [class=resizeheight-marginheader], td [class=resizeheight-marginheader] img {
                    height: 15px !important;
                }
                td [class=menulinks] a, td [class=menulinks] anpa {
                    padding-left: 5px !important;
                    padding-right: 5px !important;
                }
                td [class=hidemargin], tr [class=hidemargin], font [class=hidemargin] {
                    display: none;
                }
                td[class=alignleft] {
                    text-align: left!important;
                }
                td[class=aligncenter] {
                    text-align: center!important;
                }
                td[class=alignright] {
                    text-align: right!important;
                }
                table [class=alignlinkcenter] {
                    text-align: center !important;
                    margin: 0 auto!important;
                }
                table[class=reset-tableheight] {
                    height: auto!important;
                }
                td[class=reset-tdheight] {
                    height: auto!important;
                }
                table[class=reset-tablewidth] {
                    width: auto!important;
                }
                td[class=reset-tdwidth] {
                    width: auto!important;
                }
                span[class=whiteLinks] a {
                    color: #ffffff;
                    text-decoration: none;
                }
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body style="padding:0px; margin:0px; -webkit-text-size-adjust:none; width:100%;" bgcolor="<?php echo esc_attr( $bg ); ?>">
        <div style="background-color:<?php echo esc_attr( $bg ); ?>;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="<?php echo esc_attr( $bg ); ?>">
                <tr>
                    <td align="center">
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic-content">
                            <tr>
                                <td valign="top">
                                    <table width="340" border="0" cellpadding="0" cellspacing="0" align="left" class="resizedynamic">
                                        <tr>
                                            <td align="left" valign="top" class="aligncenter" style="font-family:Arial,Verdana,Helvetica,sans-serif; font-size:11px; color:#939393; text-decoration:none;">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tr style="line-height:1px; font-size:1px;">
                                                        <td height="15"></td>
                                                    </tr>
                                                </table> <span style="">Loved by over 100,000 businesses around the world.</span>

                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                    <tr>
                                                        <td height="1" width="1" style="line-height:1px; font-size:1px;">
                                                            <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="1" style="display:block; height: 1px;">
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="nomob">
                                                    <tr style="line-height:1px; font-size:1px;">
                                                        <td height="15"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="340" border="0" cellpadding="0" cellspacing="0" align="right" class="resizedynamic">
                                        <tr>
                                            <td class="aligncenter" align="right" valign="top" style="font-family:Arial,Verdana,Helvetica,sans-serif; font-size:11px; color:#939393; text-decoration:none;">
                                                <div class="nomob" style="line-height:1px; font-size:1px;">
                                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="15" style="display:block; height: 15px;">
                                                </div>
                                                <font style="color:#939393!important;"></font>

                                                <div style="line-height:1px; font-size:1px;">
                                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="15" style="display:block; height: 15px;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic">
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="35" class="resizeheight-marginwebversion">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="35" style="display:block; height: 35px;">
                                </td>
                            </tr>
                        </table>
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic">
                            <tr>
                                <td align="center">
                                    <table border="0" cellpadding="0" cellspacing="0" class="header-logo-container">
                                        <tr>
                                            <td class="header-logo">
                                                <a class="notEditable" href="https://themes.email/">
                                                   <?php
                                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" align="center" width="76" height="51" style="display:block" />';
                                                        }
                                                    ?>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="20" class="resizeheight-marginheader">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="20" style="display:block; height: 20px;">
                                </td>
                            </tr>
                        </table>
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic-content">
                            <tr>
                                <td class="menulinks" align="center" style="font-family:Arial,Verdana,Helvetica,sans-serif; font-weight:bold; font-size:12px; mso-line-height-rule:exactly; line-height:20px; color:#000000;">
                                    <font style="color:000000!important;">
                                        <a href="https://themes.email/magento.html" name="" style="color:#000000; white-space:nowrap; white-space:nowrap;">MAGENTO</a>
                                        <font class="hidemargin">&#160; &#160; &#160; &#160; &#160;</font>

                                        <a href="https://themes.email/prestashop.html"
                                           name="" style="color:#000000; white-space:nowrap; white-space:nowrap;">PRESTASHOP</a>
                                        <font class="hidemargin">&#160; &#160; &#160; &#160; &#160;</font>

                                        <a href="https://themes.email/woocommerce.html"
                                           name="" style="color:#000000; white-space:nowrap; white-space:nowrap;">WOOCOMMERCE</a>
                                    </font>
                                </td>
                            </tr>
                        </table>
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic">
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="20" class="resizeheight-marginheader">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="20" style="display:block; height: 20px;">
                                </td>
                            </tr>
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="1" bgcolor="#c8c8c8">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="1" style="display:block; height: 1px;">
                                </td>
                            </tr>
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="19" class="resizeheight-marginheader">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="19" style="display:block; height: 19px;">
                                </td>
                            </tr>
                        </table>
                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic-content">
                            <tr>
                                <td align="center">
                                    <table width="70%" border="0" cellspacing="0" cellpadding="0" class="resizedynamic">
                                        <tr>
                                            <td align="center" valign="top" style="font-family:Arial,Verdana,Helvetica,sans-serif; font-size:18px; mso-line-height-rule:exactly; line-height:20px; color:#000000;; font-weight:normal;">
                                                <font style="color:#000000;!important;"> <a href="https://themes.email/" name="" style="color:#000000; text-decoration:none;">
                                                    the <b>#1 marketplace</b> for Email Templates</a> </font>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellspacing="0" cellpadding="0" width="700" align="center" class="resizedynamic">
                            <tr style="line-height:1px; font-size:1px;">
                                <td class="dynamic-td">
                                    <div id="align-wrapper" style="text-align:center;">
                                        <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="700" height="20" align="center" link="" style="display:block; height: 20px;" title="" alt="" border="">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellspacing="0" cellpadding="0" width="700" align="center" class="resizedynamic">
                            <tr style="line-height:1px; font-size:1px;">
                                <td height="1" bgcolor="#c8c8c8">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="1" height="1" style="display:block; height: 1px;">
                                </td>
                            </tr>
                            <tr style="line-height:1px; font-size:1px;">
                                <td class="dynamic-td">
                                    <img src="https://s3.amazonaws.com/templates.themes.email/jura/placeholder.gif" width="700" height="30" align="center" link="" style="display:block; height: 30px;" title="" alt="" border="">
                                </td>
                            </tr>
                        </table>

                        <table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="resizedynamic-content">
                            <tr>
                                <td align="center">
                                    <table width="70%" border="0" cellspacing="0" cellpadding="0" class="resizedynamic">
                                        <tr>
                                            <td id="emailcontent" align="left" valign="top" style="font-family:Arial,Verdana,Helvetica,sans-serif; font-size:13px; mso-line-height-rule:exactly; line-height:15px; color:<?php echo esc_attr( $text ); ?>; font-weight:normal;">

                                                <!--  Here Goes Content: Start  -->
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
        <meta name="robots" content="noindex, nofollow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <!--[if gte mso 15]>
<style type="text/css">
.evergreenspace {line-height:18.5px !important;}
</style>
<![endif]-->

        <style type="text/css">
            .gray9dlink a{color:<?php echo esc_attr( $text ); ?> !important;}      
            #outlook a {padding:0;}
            body{ width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;background-color: <?php echo esc_attr( $bg ); ?>; }
            .ExternalClass {width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            .whitelink a{color: #ffffff !important;}
            .blacklink a{color: <?php echo esc_attr( $base ); ?> !important;}
            .gray3link a{color: #333333 !important;}
            .gray6link a{color: #666666 !important;}
            div.preheader { display: none !important; }
            table td {border-collapse: collapse;}

            @media only screen and (max-width: 480px) {
                table[id="backgroundTable"] { padding:20px 0px !important; }
                table[class="wrapper"] { width:318px !important; }
                *[class~="wrapper-140"] { width:140px !important; }
                *[class~="wrapper-139"] { width:139px !important; }
                *[class~="max-278"] { max-width:278px !important; }
                *[class~="border-bottom-e6e6e6"] { border-bottom:solid 1px #dddddd !important; }
                *[class~="wrapper-270"] { width: 270px !important;}
                table[class="paddingreset"], td[class="paddingreset"] { padding: 0px !important; }
                table[class="mobile-hidden"], td[class="mobile-hidden"], br[class="mobile-hidden"] { display: none !important; }
                td[class~="block"] { width:318px !important; display:block !important; }
                td[class="socialblock"] { width:318px !important; display:block !important; margin: 5px 0px !important; padding: 0px !important;}
                td[class~="align-center"] { text-align:center !important;}
                td[class~="align-center-100"] { text-align:center !important; width: 100% !important;}
                td[class~="align-center"] img { margin:0px auto !important;}
                div[class~="show"] {display: block !important; margin:0px !important; overflow: visible !important; visibility: visible !important; width: auto !important; max-height:inherit !important;}
                img[class="photo"],img[width="548"] {width:100% !important; height:auto !important; }
                img[class="mobilespace"] {width:100% !important; height:20px !important; }
                td[class="evergreenScale"] img { width:159px !important; height: 88px; }
                td[class="copyContainer"] { text-align:center !important; width:318px !important; padding:5px 0px !important; float:left; }
                td[class="rightsContainer"] { text-align:center !important; width:318px !important; padding:5px 0px 10px 0px !important; float:left;}
                td[class="copyContainer"] a, td[class="copyContainer"] span {}
                td[id="footcopy"] { display: block; text-align:center; padding-bottom: 10px !important }
                td[class="footTxt"] { padding:10px !important; text-align:center !important; display: block !important; max-width: 298px !important;}
                td[class="footface"] {padding-right: 5px !important;}
                td[class="socialspace"] {padding: 0px 5px !important;}
                *[class~="img-width-318"] {width: 318px !important; height: 1px !important;}
                *[class~="img-width-278"] {width: 278px !important; height: 1px !important;}
                *[class~="bgcolor-333333"] {background-color:#333333;}
                *[class~="space-height-20"] {height: 20px !important;}
                *[class~="pad-top-0"] {padding-top: 0px !important;}
                *[class~="pad-bottom-10"] {padding-bottom: 10px !important;}
                h1 { font-size: 20px; line-height: 1.2;}
                h2 {font-size: 18px; line-height: 1.2;}
                h3 {font-size: 16px; line-height: 1.1;}
                h4 {font-size: 14px; line-height: 1.1;}
                h5 {font-size: 13px; line-height: 1.1;}
                h6 {font-size: 11px; line-height: 1.1;}
                p {font-size: 12px; line-height: 1.4;}


                div[class~="mobile-scale"] {
                    transform-origin: 0 0;
                    transform: scale(.58,.58);
                    ms-transform-origin: 0 0;
                    ms-transform: scale(.58,.58);
                    moz-transform-origin: 0 0;
                    moz-transform: scale(.58,.58);
                    -webkit-transform-origin: 0 0;
                    -webkit-transform: scale(.58,.58);
                    max-width: 318px !important;
                }
                table[class="mobile-hidden-tablet"], td[class="mobile-hidden-tablet"], span[class="mobile-hidden-tablet"], br[class="mobile-hidden-tablet"], img[class="mobile-hidden-tablet"] { display:none; }
                div[class~="showtablet"] {display: block !important; margin:0px !important; padding:0px !important; overflow: visible !important; visibility: visible !important; width: auto !important; max-height:inherit !important;}
            }
            @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
                table[class="mobile-hidden-tablet"], td[class="mobile-hidden-tablet"], span[class="mobile-hidden-tablet"], br[class="mobile-hidden-tablet"], img[class="mobile-hidden-tablet"] { display:none; }
                div[class~="showtablet"] {display: block !important; margin:0px !important; padding:0px !important; overflow: visible !important; visibility: visible !important; width: auto !important; max-height:inherit !important;}
            }
        </style>
    </head>
    <body bgcolor="<?php echo esc_attr( $bg ); ?>" style="background-color: <?php echo esc_attr( $bg ); ?>;">
        <table cellpadding="0" cellspacing="0" border="0" class="pad-bottom-10 pad-top-0" style="padding: 20px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center">
            <tr>
                <td>
                    <table align="center" cellpadding="0" cellspacing="0" border="0" width="548" style="border-bottom-style:solid; border-bottom-width:1px; border-bottom-color:#dddddd; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="wrapper">
                        <!-- Begin preheader -->
                        <tr>
                            <td align="left" valign="top" style="padding: 10px 0;">
                                <table align="center" cellpadding="0" cellspacing="0" border="0" width="548" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="wrapper">
                                    <tr>
                                        <td align="left" valign="top" style="text-decoration:none; color: #999999; font-family:Helvetica,Arial,Sans-Serif; font-size:10px; line-height:14px; mso-line-height-rule: exactly;">
                                            Lorem ipsum dolor sit amet consectetur adipiscing
                                            <br />
                                            elit sed do eiusmod tempor incididunt ut labore.
                                        </td>
                                        <td align="right" valign="middle" style="text-decoration:none; color: #999999; font-family:Helvetica,Arial,Sans-Serif; font-size:10px; line-height:14px; mso-line-height-rule: exactly;">
                                            <a href="http://themes.email/"  target="_blank" style="text-decoration:underline; color: #999999; font-family:Helvetica,Arial,Sans-Serif; font-size:10px; line-height:14px; mso-line-height-rule: exactly;">Visit Website</a>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right:solid 1px #dddddd; border-left: solid 1px #dddddd; background-color: <?php echo esc_attr( $body ); ?>;" bgcolor="<?php echo esc_attr( $body ); ?>">
                                <table align="center" cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; background-color: <?php echo esc_attr( $body ); ?>;">

                                    <!-- Begin logo -->
                                    <tr>

                                        <td align="center" valign="top" bgcolor="<?php echo esc_attr( $body ); ?>" style="border-top-width:1px;border-top-style:solid;border-top-color:#dddddd;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#dddddd;">
                                            <table align="center" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                <tr>
                                                    <td align="center" valign="middle" style="padding: 25px 0;">
                                                       <a href="https://themes.email/" target="_blank">
                                                        <?php
                                                            if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                            echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="58" height="20" />';
                                                            }
                                                        ?>
                                                        </a>
                                                        </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <!-- Begin nav_new -->
                                    <tr>

                                        <td valign="top" class="mobile-hidden" bgcolor="<?php echo esc_attr( $body ); ?>" style="border-bottom-style:solid;border-bottom-width:1px;border-bottom-color: #dddddd;">
                                            <table align="center" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                <tr>
                                                    <td align="center" style="padding: 15px 0px;" bgcolor="<?php echo esc_attr( $body ); ?>">
                                                        <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                            <tr>
                                                                <td align="center" valign="middle" class="blacklink"><a class="blacklink" href="https://themes.email/magento.html"  target="_blank" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight: Bold; font-size:10px; font-family:Helvetica,Arial,Sans-Serif;">MAGENTO</a></td>

                                                                <td align="center" valign="middle" class="blacklink" style="padding-left: 48px;"><a class="blacklink" href="https://themes.email/prestashop.html"  target="_blank" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight: Bold; font-size:10px;font-family:Helvetica,Arial,Sans-Serif;">PRESTASHOP</a></td>

                                                                <td align="center" valign="middle" class="blacklink" style="padding-left: 48px;"><a class="blacklink" href="https://themes.email/woocommerce.html"  target="_blank" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight: Bold; font-size:10px;font-family:Helvetica,Arial,Sans-Serif;">WOOCOMMERCE</a></td>

                                                                <td align="center" valign="middle" class="blacklink" style="padding-left: 48px;"><a class="blacklink" href="https://themes.email/"  target="_blank" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight: Bold; font-size:10px;font-family:Helvetica,Arial,Sans-Serif;">WORDPRESS</a></td>

                                                                <td align="center" valign="middle" class="blacklink" style="padding-left: 48px;"><a class="blacklink" href="https://themes.email/"  target="_blank" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight: Bold; font-size:10px;font-family:Helvetica,Arial,Sans-Serif;">EDD</a></td>



                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>

                                    <!-- Begin custom -->
                                    <tr>

                                        <td align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="<?php echo esc_attr( $body ); ?>">
                                            <tr>
                                                <td align="left" valign="top"><table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" style="border-collapse:collapse;">
                                                    <tr>
                                                        <td align="left" valign="top" style="font-size:0%; line-height:100%;"><img alt="" src="https://s3.amazonaws.com/templates.themes.email/dana/spacer.gif" width="1" height="20" style="display: block; outline:none; text-decoration:none; border:none;" class="space-height-20"></td>
                                                    </tr>

                                                    <tr>
                                                        <td id="emailcontent" align="left" valign="top" style="outline: none; text-decoration: none; border: none; color: <?php echo esc_attr( $text ); ?>; font-size: 12px; font-family: Helvetica,Arial,Sans-Serif; line-height:20px; padding:10px 20px 10px 20px;" class="gray9dlink">

                                                            <!--  Here Goes Content: Start  -->
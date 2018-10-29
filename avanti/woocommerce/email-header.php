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
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style type="text/css">
            @media screen {
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 400;
                    src: local('Lato Regular'), local('Lato-Regular'), url(https://s3.amazonaws.com/templates.themes.email/avanti/lato-regular.woff) format('woff');
                }

                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 700;
                    src: local('Lato Bold'), local('Lato-Bold'), url(https://s3.amazonaws.com/templates.themes.email/avanti/lato-bold.woff) format('woff');
                }

                @font-face {
                    font-family: 'Lato';
                    font-style: italic;
                    font-weight: 400;
                    src: local('Lato Italic'), local('Lato-Italic'), url(https://s3.amazonaws.com/templates.themes.email/avanti/lato-italic.woff) format('woff');
                }
            }


            body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
            table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
            img { -ms-interpolation-mode: bicubic; }

            img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
            table { border-collapse: collapse !important; }
            body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
            h1 { font-size: 18px; line-height: 1.2;}
            h2 {font-size: 16px; line-height: 1.2;}
            h3 {font-size: 14px; line-height: 1.1;}
            h4 {font-size: 12px; line-height: 1.1;}
            h5 {font-size: 11px; line-height: 1.1;}
            h6 {font-size: 10px; line-height: 1.1;}

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            a {
                color: <?php echo esc_attr( $base ); ?>;
                font-weight: bold;
                text-decoration: none !important;
            }
            a:hover {
                color: #000000 !important;
                border-bottom: 3px solid <?php echo esc_attr( $base ); ?> !important;
                text-decoration: none !important;
            }
            div[style*="margin: 16px 0;"] { margin: 0 !important; }
        </style>
    </head>

    <body style="background-color:<?php echo esc_attr( $bg ); ?>;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;height:100% !important;width:100% !important;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;">

            <tr>
                <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="padding-top:0px;padding-bottom:0px;padding-right:20px;padding-left:20px;border-top-width:4px;border-top-style:solid;border-top-color:<?php echo esc_attr( $base ); ?>;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                    <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="480" style="border-top-width:4px;border-top-style:solid;border-top-color:<?php echo esc_attr( $base ); ?>;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;" >
<tr>
<td align="center" valign="top" width="480" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
<![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:480px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;">
                        <tr>
                            <td align="left" valign="top" style="padding-top:0px;padding-bottom:40px;padding-right:0px;padding-left:0px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;color:<?php echo esc_attr( $base ); ?>;font-weight:bold;text-decoration:none !important;">
                                    <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="40px" height="40px" />';
                                        }
                                    ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
                </td>
            </tr>
            <tr>
                <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="padding-top:0px;padding-bottom:0px;padding-right:20px;padding-left:20px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                    <!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="480" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;" >
<tr>
<td align="center" valign="top" width="480" style="-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;" >
<![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:480px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;">

                        <tr>
                            <td id="emailcontent" bgcolor="<?php echo esc_attr( $body ); ?>" align="left" style="padding-top:20px;padding-bottom:40px;padding-right:0px;padding-left:0px;color:<?php echo esc_attr( $text ); ?>;font-family:'Lato',sans-serif;font-size:13px;font-weight:400;line-height:25px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">

                                <!--  Here Goes Content: Start  -->
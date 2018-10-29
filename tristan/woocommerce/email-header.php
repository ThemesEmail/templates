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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
            /* CLIENT-SPECIFIC STYLES */
            #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
            .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
            body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
            table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
            img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */
            h1 { font-size: 20px; line-height: 1.2; color: <?php echo esc_attr( $base ); ?>;}
            h2 {font-size: 18px; line-height: 1.2; color: <?php echo esc_attr( $base ); ?>;}
            h3 {font-size: 16px; line-height: 1.1; color: <?php echo esc_attr( $base ); ?>;}
            h4 {font-size: 14px; line-height: 1.1; color: <?php echo esc_attr( $base ); ?>;}
            h5 {font-size: 13px; line-height: 1.1; color: <?php echo esc_attr( $base ); ?>;}
            h6 {font-size: 12px; line-height: 1.1; color: <?php echo esc_attr( $base ); ?>;}
            p {font-size: 14px; line-height: 1.4; color: <?php echo esc_attr( $text ); ?>;}

            /* iOS BLUE LINKS */

            .ios-links a {color:<?php echo esc_attr( $base ); ?> !important; text-decoration: none !important;}
            /* RESET STYLES */
            body{margin:0; padding:0;}
            img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
            table{border-collapse:collapse !important;}
            body{height:100% !important; margin:0; padding:0; width:100% !important;}
            /* FONT SMOOTHING */
            body {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            /* MOBILE STYLES */
            @media screen and (max-width: 630px) {

                /* RESPONSIVE ELEMENTS */
                table[class="responsive-table"]{
                    width: 100% !important;
                }

                /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
                td[class="no-padding"]{
                    padding: 0 !important;
                }

                /* COMPONENTS */

                /* HEADING A */
                td[class="heading-a-title"]{
                    font-size: 23px !important;
                }


            }
        </style>
    </head>

    <body bgcolor="<?php echo esc_attr( $bg ); ?>" style="margin: 0; padding: 0; background-color:<?php echo esc_attr( $bg ); ?>;">
        <!-- PREHEADER TEXT -->
        <div style="display: none; font-size: 1px; color: <?php echo esc_attr( $text ); ?>; line-height: 1px; font-family: Helvetica,Arial,sans-serif; max-height: 0px; max-width: 0px; opacity:0; overflow:hidden;"></div>
        <!-- HEADER -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
            <tr>
                <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="padding-top:0px; padding-right:15px; padding-bottom:55px; padding-left:15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table">
                        <!-- TOP DASH -->
                        <tr>
                            <td style="border-top-width: 4px; border-top-style: solid; border-top-color: <?php echo esc_attr( $base ); ?>; padding-bottom: 25px" colspan="2"></td>
                        </tr>
                        <tr>
                            <td bgcolor="<?php echo esc_attr( $bg ); ?>" width="100" align="left">
                                <a href="https://themes.email" target="_blank">
                                   <?php
                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" border="0" width="119" style="height: auto; display: block; font-family: Helvetica,Arial,sans-serif; color: #666666; font-size: 16px;" />';
                                        }
                                    ?>
                                </a>
                            </td>
                            <td bgcolor="<?php echo esc_attr( $bg ); ?>" width="380" align="right">
                                <a href="https://themes.email/" style="color: #747474; font-family: Helvetica,Arial,sans-serif; font-size: 12px; font-weight: 400; line-height: 14px">the #1 marketplace</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- GRID CONTAINER -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
            <tr>
                <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="padding-top:0px; padding-right:15px; padding-bottom:0px; padding-left:15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table" bgcolor="<?php echo esc_attr( $body ); ?>" style="background-color:<?php echo esc_attr( $body ); ?>;">
                        <!-- GRID ROW -->
                        <tr>
                            <td>
                                <!-- GRID CELL -->
                                <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="responsive-table">
                                    <tr>
                                        <td style="padding-top:20px; padding-right:0px; padding-bottom:20px; padding-left:0px;">
                                            <!-- GRID CELL INNER -->
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <!-- CONTENT -->
                                                <tr>
                                                    <td id="emailcontent" align="left" style="padding-bottom: 25px; color: <?php echo esc_attr( $text ); ?>; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: normal; line-height: 1.4; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ddd;">

                                                        <!--  Here Goes Content: Start  -->
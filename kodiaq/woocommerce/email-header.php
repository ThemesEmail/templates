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
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" style="font-size: 13px; font-family:Verdana,Helvetica,Arial,sans-serif;">

    <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style>
            /* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
            #outlook a {
                padding: 0; }

            /* CUSTOM */
            .smaller-logo {
                width: 180px;
            }
            .ReadMsgBody {
                width: 100%; }

            .ExternalClass {
                width: 100%; }

            /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%; }

            /* Force Hotmail to display normal line spacing */
            body, table, td, p, a, li, blockquote {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%; }

            /* Prevent WebKit and Windows mobile changing default text sizes */
            table, td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt; }

            /* Remove spacing between tables in Outlook 2007 and up */
            img {
                -ms-interpolation-mode: bicubic; }

            /* Allow smoother rendering of resized image in Internet Explorer */
            /* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */

            img {
                border: 0;
                height: auto;
                line-height: 100%;
                outline: none;
                text-decoration: none; }

            /* -------------------------------------
            GLOBAL
            A very basic CSS reset
            ------------------------------------- */
            body, body * {
                box-sizing: border-box; }

            img {
                max-width: 100%;
                height: auto; }

            html, body {
                font-size: 13px;
                font-family:Verdana,Helvetica,Arial,sans-serif; }

            body {
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
                width: 100% !important;
                height: 100% !important;
                line-height: 1.6;
                color: <?php echo esc_attr( $text ); ?>; }

            /* Let's make sure all tables have defaults */
            table td {
                vertical-align: top; }
            table {
                border-spacing: 0;
            }
            .white {
                background: #ffffff !important;
                color: #ffffff !important; }

            .hr {
                display: block;
                position: relative;
                padding: 0;
                margin: 8px auto;
                height: 0;
                width: 100%;
                max-height: 0;
                font-size: 1px;
                line-height: 0;
                clear: both;
                border: none;
                border-top: 1px solid #ccc; }

            /* -------------------------------------
            BODY & CONTAINER
            ------------------------------------- */
            body {
                background-color: <?php echo esc_attr( $bg ); ?>; }
            
            .body-wrap {
                background-color: #f6f6f6;
                width: 100%; }

            .container {
                display: block !important;
                max-width: 600px !important;
                margin: 0 auto !important;
                /* makes it centered */
                clear: both !important; }

            .content {
                max-width: 600px;
                margin: 0 auto;
                display: block;
                padding: 20px; }

            .hero {
                background-color: <?php echo esc_attr( $bg ); ?>;
                padding-top: 40px; }

            /* -------------------------------------
            HEADER, FOOTER, MAIN
            ------------------------------------- */
            .main {
                background: <?php echo esc_attr( $body ); ?>;
                border: 1px solid #e9e9e9;
                border-radius: 3px; }

            .content-wrap {
                padding: 20px; }

            .content-block {
                padding: 0px 0px 20px; }

            .header {
                width: 100%;
                margin-bottom: 20px; }

            /*  FOOTER
            Contains footer content, including address and unsubscribe links.
            */
            .footer {
                color: #939598;
                padding: 30px 0;
            }
            .footer p, .footer p a {
                font-size: 12px;
                color: #939598;
            }
            p.address {
                margin-bottom: 6px;
            }
            .social-media-logos a {
                margin: 0px 4px 0px;
            }

            /* -------------------------------------
            TYPOGRAPHY
            ------------------------------------- */
            h1, h2, h3 {
                font-family:Verdana,Helvetica,Arial,sans-serif;
                color: <?php echo esc_attr( $base ); ?>;
                line-height: 1.1;
                font-weight: bold; }

            h1, .text-size--1 {
                font-size: 20px; }

            h2, .text-size--2 {
                font-size: 18px; }

            h3, .text-size--3 {
                font-size: 16px; }

            h4, .text-size--4 {
                font-size: 14px;
                font-weight: 600; }
            h5, .text-size--5 {
                font-size: 13px;
                font-weight: 600; }
            h6, .text-size--6 {
                font-size: 12px;
                font-weight: 600; }

            ul {
                list-style: square outside none; }

            p, ul, ol {
                margin-bottom: 13.33333px;
                font-weight: normal;
                line-height: 1.6;
                font-size: 13px;
                color: <?php echo esc_attr( $text ); ?>;
            }

            p li, ul li, ol li {
                margin-left: 5px;
                list-style-position: inside; }

            /* -------------------------------------
            LINKS & BUTTONS
            ------------------------------------- */
            a {
                color: <?php echo esc_attr( $base ); ?>;
                text-decoration: none;
            }

            a.imp {
                color: <?php echo esc_attr( $base ); ?>;
                font-weight: bold;
            }

            /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
            ------------------------------------- */
            .last {
                margin-bottom: 0; }

            .first {
                margin-top: 0; }

            .aligncenter {
                text-align: center; }

            .alignleft {
                text-align: left; }

            .clear {
                clear: both; }

            /* -------------------------------------
            RESPONSIVE STYLES
            ------------------------------------- */
            @media only screen and (max-width: 640px) {
                body, table, td, p, a, li, blockquote {
                    -webkit-text-size-adjust: none !important; }
                /* Prevent Webkit platforms from changing default text sizes */
                body {
                    width: 100% !important;
                    min-width: 100% !important; }
                /* Prevent iOS Mail from adding padding to the body */
                h1, h2, h3, h4 {
                    font-weight: bold !important;
                    margin: 20px 0px 5px !important; }
                h1 {
                    font-size: 20px !important; }
                h2 {
                    font-size: 18px !important; }
                h3 {
                    font-size: 16px !important; }
                .container {
                    width: 100% !important; }
                .content, .content-wrapper {
                    padding: 10px !important; }

                @media only screen and (max-width: 550px) {

                    .main {
                        border: none; }

                    .pro-content {
                        background-color: <?php echo esc_attr( $body ); ?>;
                        padding: 40px; }

                    .pro-content, .pro-content p {
                        color: <?php echo esc_attr( $text ); ?>; }

                    .pro-divider {
                        border-top: 1px solid #e6e7e8;
                        padding-top: 30px; }

                    h1, h2, h3, h4 {
                        color: <?php echo esc_attr( $base ); ?>; }

                    h3 {
                        font-size: 16px;
                        padding-bottom: 25px;
                        padding-top: 8px; }

                    .feature-img {
                        border: 1px solid #e6e7e8;
                        border-radius: 4px; }

                    .feature p {
                        margin-bottom: 30px; }

                    .alignleft {
                        text-align: left; }

                    .table-padding {
                        padding-left: 20px;
                        padding-right: 20px;
                    }
        </style>
    </head>

    <body style="-webkit-text-size-adjust: none; -ms-text-size-adjust: 100%; box-sizing: border-box; font-size: 13px; font-family:Verdana,Helvetica,Arial,sans-serif; -webkit-font-smoothing: antialiased; width: 100% !important; height: 100% !important; line-height: 1.6; color: <?php echo esc_attr( $text ); ?>; background: <?php echo esc_attr( $bg ); ?>; "
          bgcolor="<?php echo esc_attr( $bg ); ?>">
        <table class="body-wrap" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; border-spacing: 0; width: 100%; background: <?php echo esc_attr( $bg ); ?>;" bgcolor="<?php echo esc_attr( $bg ); ?>">
            <tr style="box-sizing: border-box; ">
                <td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; " valign="top"></td>
                <td class="container" width="600" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; "
                    valign="top">
                    <div class="content" style="box-sizing: border-box; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                        <table class="table-padding main" width="100%" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; border-spacing: 0; border-radius: 3px; background: <?php echo esc_attr( $body ); ?>; margin: 0; padding: 0px 20px; border: 1px none #e9e9e9;"
                               bgcolor="<?php echo esc_attr( $body ); ?>">
                            <tr style="box-sizing: border-box; ">
                                <td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top;" valign="top">
                                    <table width="100%" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; border-spacing: 0; ">
                                        <tr style="box-sizing: border-box;">
                                            <td class="hero aligncenter pro-content" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; text-align: center; color: <?php echo esc_attr( $text ); ?>; background: <?php echo esc_attr( $body ); ?>; padding: 40px;"
                                                bgcolor="<?php echo esc_attr( $body ); ?>" valign="top">
                                                <a href="https://themes.email" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: <?php echo esc_attr( $base ); ?>; text-decoration: none; ">
                                                    <?php
                                                        if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                        echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" style="width: 180px; -ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%; border: 0;" />';
                                                        }
                                                    ?>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing: border-box; ">
                                            <td id="emailcontent" class="pro-content pro-divider" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; color: <?php echo esc_attr( $text ); ?>; border-top-width: 1px; border-top-color: #e6e7e8; background: <?php echo esc_attr( $body ); ?>; margin: 0; padding: 0px 40px 30px; border: none;"
                                                bgcolor="<?php echo esc_attr( $body ); ?>" valign="top">
                                                <style style="box-sizing: border-box;">
                                                    .header-img{
                                                        margin-bottom: 20px;
                                                        position: relative;
                                                    }

                                                    .pro-divider{
                                                        border-style:none;
                                                        padding:0px 40px 30px;
                                                    }

                                                    }
                                                </style>
                                                <div class="header-img" style="box-sizing: border-box; position: relative; margin: 0px 0px 20px;">
                                                    <a href="https://themes.email/" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: <?php echo esc_attr( $base ); ?>; text-decoration: none;">
                                                        <img alt="heading" src="https://s3.amazonaws.com/templates.themes.email/kodiaq/heading.jpg" style="-ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%; border: 0;">
                                                    </a>
                                                </div>
                                                <p style="font-family:Verdana,Helvetica,Arial,sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; font-weight: normal; line-height: 1.6; font-size: 13px; color: <?php echo esc_attr( $text ); ?>; margin: 0px 0px 13.33333px;">

                                                    <!--  Here Goes Content: Start  -->

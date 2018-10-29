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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/templates.themes.email/brook/openfonts.css">
        <style type="text/css">
            #outlook a{
                padding:0;
            }
            .ReadMsgBody{
                width:100%;
            }
            .ExternalClass{
                width:100%;
            }
            .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
                line-height:100%;
            }
            body,table,td,p,a,li,blockquote{
                -webkit-text-size-adjust:100%;
                -ms-text-size-adjust:100%;
            }
            table,td{
                mso-table-lspace:0pt;
                mso-table-rspace:0pt;
            }
            img{
                -ms-interpolation-mode:bicubic;
            }
            body{
                margin:0;
                padding:0;
            }
            img{
                border:0;
                height:auto;
                line-height:100%;
                outline:none;
                text-decoration:none;
            }
            table{
                border-collapse:collapse !important;
            }
            body,#bodyTable,#bodyCell{
                height:100% !important;
                margin:0;
                padding:0;
                width:100% !important;
            }
            #bodyCell{
                padding:20px;
            }
            #templateContainer{
                width:90%;
                max-width:650px;
            }
            body,#bodyTable{
                background-color:<?php echo esc_attr( $bg ); ?>;
            }
            #templateContainer{
                border:1px solid #E2E3E4;
                background-color:<?php echo esc_attr( $body ); ?>;
            }
            h1{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:17px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.2em;
                text-transform:uppercase;
            }
            h2{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:15px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.3em;
                text-transform:uppercase;
            }
            h3{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:13px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.2em;
                text-transform:uppercase;
            }
            h4{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.3em;
                text-transform:uppercase;
                margin-top:3px;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                text-align:center;
            }
            h5{
                color:<?php echo esc_attr( $text ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.2em;
                text-transform:uppercase;
                margin-top:11px;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                text-align:center;
            }
            h6{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:10px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.2em;
                text-transform:uppercase;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                text-align:center;
            }
            h7{
                color:<?php echo esc_attr( $text ); ?> !important;
                display:inline-block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:14px;
                font-style:normal;
                font-weight:normal;
                line-height:150%;
                letter-spacing:0.2em;
                border-bottom:1px solid <?php echo esc_attr( $text ); ?>;
                text-transform:uppercase;
                padding-top:0;
                padding-right:10px;
                padding-bottom:0;
                padding-left:10px;
                margin-top:0;
                margin-right:auto;
                margin-bottom:10px;
                margin-left:auto;
                text-align:center;
            }
            .preheaderContent{
                font-family: 'Trebuchet MS',Arial,sans-serif;
                text-transform:uppercase;
                color:<?php echo esc_attr( $base ); ?>;
                font-size:10px;
                font-style:normal;
                font-weight:normal;
                letter-spacing:0.2em;
                line-height:130%;
                text-align:center;
                background-color:transparent;
                padding-top:16px;
                padding-bottom:12px;
                padding-left:12px;
            }
            .preheaderContent a:link,
            .preheaderContent a:visited,
            .preheaderContent a .yshortcuts{
                font-weight:normal;
                color:<?php echo esc_attr( $text ); ?>;
                text-decoration:none;
            }
            .preheaderContent a:hover{
                color:<?php echo esc_attr( $text ); ?>;
                text-decoration:underline;
            }
            #templateHeader{
                background-color:transparent;
                border-top:1px solid #E2E3E4;
            }
            .logoContent{
                width:50%;
            }
            .headerContent{
                width:25%;
            }
            .logoContent img,
            .headerContent img{
                max-height:112px;
                height:auto;
                width:100%;
            }
            .logoContent{
                padding-top:20px;
                padding-right:0;
                padding-bottom:20px;
                padding-left:0;
            }
            .headerContent.one img{
                display:none;
            }
            .headerContent.two img{
                display:none;
            }
            #templateBody{
                background-color:transparent;
                border-top:1px solid #E2E3E4;
            }
            .bodyContent{
                color:<?php echo esc_attr( $text ); ?>;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                font-style:normal;
                line-height:150%;
                padding-top:20px;
                padding-right:5%;
                padding-bottom:10px;
                padding-left:5%;
            }
            .bodyContent a:link,
            .bodyContent a:visited,
            .bodyContent a .yshortcuts{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            .imageContent{
                padding-top:0;
                padding-right:0;
                padding-bottom:0;
                padding-left:0;
                text-align:center;
            }
            .imageContent img{
                display:inline;
                height:auto;
                width:100% !important;
            }
            #templateColumns{
                margin-top:11px;
                border-top:1px solid #E2E3E4;
                background-color:transparent;
            }
            .leftColumnContent{
                color:<?php echo esc_attr( $text ); ?>;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                line-height:150%;
                padding-top:10px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
                text-align:center;
            }
            .leftColumnContent a:link,
            .leftColumnContent a:visited,
            .leftColumnContent a .yshortcuts{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            .centerColumnContent{
                color:<?php echo esc_attr( $text ); ?>;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                line-height:150%;
                padding-top:10px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
                text-align:center;
            }
            .centerColumnContent a:link,
            .centerColumnContent a:visited,
            .centerColumnContent a .yshortcuts{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            .rightColumnContent{
                color:<?php echo esc_attr( $text ); ?>;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:12px;
                line-height:150%;
                padding-top:10px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
                text-align:center;
            }
            .rightColumnContent a:link,
            .rightColumnContent a:visited,
            .rightColumnContent a .yshortcuts{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            .leftColumnContent img,
            .centerColumnContent img,
            .rightColumnContent img{
                display:inline;
                height:auto;
                width:100%;
            }
            .leftColumnContent.text,
            .centerColumnContent.text,
            .rightColumnContent.text{
                padding-top:10px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
            }
            .alternating td.text,
            .alternating td.image{
                width:50%;
            }
            .alternating td.text{
                padding-right:80px;
                padding-left:80px;
            }
            #templateFooter{
                border-top:3px double #E2E3E4;
                background-color:transparent;
                margin-top:20px;
            }
            .footerContent{
                padding-top:20px;
                padding-right:0;
                padding-bottom:20px;
                padding-left:0;
                text-align:left;
            }
            .footerContent a:link,
            .footerContent a:visited,
            .footerContent a .yshortcuts,
            .footerContent a span{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:normal;
                text-decoration:none;
            }
            .footerContent a:link,
            .footerContent a:visited,
            .footerContent a .yshortcuts,
            .footerContent a span{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:normal;
                text-decoration:none;
            }
            .footerContent a:hover{
                text-decoration:underline;
            }
            .footerBottom{
                margin-top:20px;
                border-top:1px solid #E2E3E4;
                padding-left:12px;
                padding-right:12px;
            }
            .footerBottom h6{
                color:<?php echo esc_attr( $base ); ?> !important;
                display:block;
                font-family: 'Trebuchet MS',Arial,sans-serif;
                font-size:10px;
                font-style:normal;
                font-weight:normal;
                line-height:200%;
                letter-spacing:0.3em;
                text-transform:uppercase;
                margin-top:0;
                margin-right:0;
                margin-bottom:0;
                margin-left:0;
                text-align:center;
            }
            @media only screen and (max-width: 768px){
                #templateContainer{
                    max-width:720px !important;
                    width:96% !important;
                }

            }	@media only screen and (max-width: 768px){
                .leftColumnContent.text,
                .centerColumnContent.text,
                .rightColumnContent.text{
                    padding-right:20px !important;
                    padding-left:20px !important;
                }

            }	@media only screen and (max-width: 768px){
                .threeColumn{
                    display:block !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 768px){
                .threeColumn .leftColumnContent img,
                .threeColumn .centerColumnContent img,
                .threeColumn .rightColumnContent img{
                    max-width:none !important;
                }

            }	@media only screen and (max-width: 640px){
                #templateContainer{
                    max-width:600px !important;
                    width:98% !important;
                }

            }	@media only screen and (max-width: 640px){
                .bodyContent{
                    padding-right:40px !important;
                    padding-left:40px !important;
                }

            }	@media only screen and (max-width: 640px){
                .leftColumnContent.text,
                .centerColumnContent.text,
                .rightColumnContent.text{
                    padding-right:20px !important;
                    padding-left:20px !important;
                }

            }	@media only screen and (max-width: 640px){
                .twoColumn,.threeColumn,.footer-content{
                    padding-top:10px !important;
                    padding-bottom:10px !important;
                    display:block !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 640px){
                .twoColumn .leftColumnContent img,
                .twoColumn .centerColumnContent img,
                .twoColumn .rightColumnContent img,
                .threeColumn .leftColumnContent img,
                .threeColumn .centerColumnContent img,
                .threeColumn .rightColumnContent img{
                    max-width:none !important;
                }

            }	@media only screen and (max-width: 640px){
                .alternating td.image,
                .alternating td.text{
                    width:90% !important;
                    display:block !important;
                    padding-right:5% !important;
                    padding-left:5% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateContainer{
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .leftColumnContent.text,
                .centerColumnContent.text,
                .rightColumnContent.text{
                    padding-right:20px !important;
                    padding-left:20px !important;
                }

            }	@media only screen and (max-width: 480px){
                .twoColumn,.threeColumn,.footer-content{
                    padding-top:10px !important;
                    padding-bottom:10px !important;
                    display:block !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .twoColumn .leftColumnContent img,.twoColumn .centerColumnContent img,.twoColumn .rightColumnContent img,.threeColumn .leftColumnContent img,.threeColumn .centerColumnContent img,.threeColumn .rightColumnContent img{
                    max-width:none !important;
                }

            }	@media only screen and (max-width: 480px){
                .alternating td.image,.alternating td.text{
                    width:90% !important;
                    display:block !important;
                    padding-right:5% !important;
                    padding-left:5% !important;

                }

            }
        </style>
    </head>

    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;background-color: <?php echo esc_attr( $bg ); ?>;height: 100% !important;width: 100% !important;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin: 0;padding: 0;background-color: <?php echo esc_attr( $bg ); ?>;border-collapse: collapse !important;height: 100% !important;width: 100% !important;">
                <tr>
                    <td align="center" valign="top" id="bodyCell" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin: 0;padding: 20px;height: 100% !important;width: 100% !important;">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 90%;max-width: 650px;border: 1px solid #E2E3E4;background-color: <?php echo esc_attr( $body ); ?>;border-collapse: collapse !important;">
                            <tr>
                                <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                        <tr>
                                            <td valign="top" class="preheaderContent" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-family: 'Trebuchet MS',Arial,sans-serif;text-transform: uppercase;color: <?php echo esc_attr( $base ); ?>;font-size: 10px;font-style: normal;font-weight: normal;letter-spacing: 0.2em;line-height: 130%;text-align: center;background-color: transparent;padding-top: 16px;padding-bottom: 12px;padding-left: 12px;">
                                               the #1 marketplace of
                                                <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;font-weight: normal;color: <?php echo esc_attr( $text ); ?>;text-decoration: none;">Email Templates</a>&nbsp;
                                                for E-Commerce Websites
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: transparent;border-top: 1px solid #E2E3E4;border-collapse: collapse !important;">
                                        <tr>
                                            <td valign="top" class="headerContent one" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 25%;">
                                                <img src="https://s3.amazonaws.com/templates.themes.email/brook/placeholder.png" alt="" border="0" style="margin: 0;padding: 0;-ms-interpolation-mode: bicubic;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;max-height: 112px;width: 100%;display: none;"
                                                     id="headerImage00">
                                            </td>
                                            <td valign="top" class="logoContent" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 50%;padding-top: 20px;padding-right: 0;padding-bottom: 20px;padding-left: 0;">
                                                <div style="text-align: center;">
                                                    <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;">
                                                       <?php
                                                            if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                            echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" align="none" width="240" height="224" style="width: 240px;height: 112px;margin: 0px;-ms-interpolation-mode: bicubic;border: 0;line-height: 100%;outline: none;text-decoration: none;max-height: 112px;" />';
                                                            }
                                                        ?>
                                                    </a>
                                                </div>
                                            </td>
                                            <td valign="top" class="headerContent two" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 25%;">
                                                <img src="https://s3.amazonaws.com/templates.themes.email/brook/placeholder.png" alt="" border="0" style="margin: 0;padding: 0;-ms-interpolation-mode: bicubic;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;max-height: 112px;width: 100%;display: none;" id="headerImage01">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: transparent;border-top: 1px solid #E2E3E4;border-collapse: collapse !important;">
                                        <tr>
                                            <td id="emailcontent" valign="top" class="bodyContent" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: <?php echo esc_attr( $text ); ?>;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 12px;font-style: normal;line-height: 150%;padding-top: 20px;padding-right: 5%;padding-bottom: 10px;padding-left: 5%;text-align: left;">

                                                <!--  Here Goes Content: Start  -->
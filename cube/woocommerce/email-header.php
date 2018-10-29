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
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- NAME: 1 COLUMN -->
        <!--[if gte mso 15]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <style type="text/css">
            p{
                margin:10px 0;
                padding:0;
            }
            table{
                border-collapse:collapse;
            }
            h1,h2,h3,h4,h5,h6{
                display:block;
            }
            img,a img{
                border:0;
                height:auto;
                outline:none;
                text-decoration:none;
            }
            body,#bodyTable,#bodyCell{
                height:100%;
                margin:0;
                padding:0;
                width:100%;
            }
            #outlook a{
                padding:0;
            }
            img{
                -ms-interpolation-mode:bicubic;
            }
            table{
                mso-table-lspace:0pt;
                mso-table-rspace:0pt;
            }
            .ReadMsgBody{
                width:100%;
            }
            .ExternalClass{
                width:100%;
            }
            p,a,li,td,blockquote{
                mso-line-height-rule:exactly;
            }
            a[href^=tel],a[href^=sms]{
                color:inherit;
                cursor:default;
                text-decoration:none;
            }
            p,a,li,td,body,table,blockquote{
                -ms-text-size-adjust:100%;
                -webkit-text-size-adjust:100%;
            }
            .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
                line-height:100%;
            }
            a[x-apple-data-detectors]{
                color:inherit !important;
                text-decoration:none !important;
                font-size:inherit !important;
                font-family:inherit !important;
                font-weight:inherit !important;
                line-height:inherit !important;
            }
            #bodyCell{
                padding:10px;
            }
            .templateContainer{
                max-width:600px !important;
            }
            a.Button{
                display:block;
            }
            .Image{
                vertical-align:bottom;
            }
            .TextContent{
                word-break:break-word;
            }
            .TextContent img{
                height:auto !important;
            }
            .DividerBlock{
                table-layout:fixed !important;
            }
            body,#bodyTable{
                background-color:<?php echo esc_attr( $bg ); ?>;
            }
            #bodyCell{
                border-top:0;
            }
            .templateContainer{
                border:0;
            }
            h1{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:20px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h2{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:18px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h3{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:16px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h4{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:14px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            #templatePreheader{
                background-color:<?php echo esc_attr( $body ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:0px;
                padding-bottom:0px;
            }
            #templatePreheader .TextContent,
            #templatePreheader .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:13px;
                line-height:150%;
                text-align:left;
            }
            #templatePreheader .TextContent a,
            #templatePreheader .TextContent p a{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            #templateHeader{
                background-color:<?php echo esc_attr( $body ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:0px;
                padding-bottom:0;
            }
            #templateHeader .TextContent,
            #templateHeader .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:13px;
                line-height:150%;
                text-align:left;
            }
            #templateHeader .TextContent a,
            #templateHeader .TextContent p a{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            #templateBody{
                background-color:<?php echo esc_attr( $body ); ?>;
                border-top:0;
                border-bottom:2px solid #EAEAEA;
                padding-top:0;
                padding-bottom:9px;
            }
            #templateBody .TextContent,
            #templateBody .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:13px;
                line-height:150%;
                text-align:left;
            }
            #templateBody .TextContent a,
            #templateBody .TextContent p a{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            #templateFooter{
                background-color:<?php echo esc_attr( $bg ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:9px;
                padding-bottom:9px;
            }
            #templateFooter .TextContent,
            #templateFooter .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:13px;
                line-height:150%;
                text-align:center;
            }
            #templateFooter .TextContent a,
            #templateFooter .TextContent p a{
                color:<?php echo esc_attr( $base ); ?>;
                font-weight:bold;
                text-decoration:none;
            }
            @media only screen and (min-width:768px){
                .templateContainer{
                    width:600px !important;
                }

            }	@media only screen and (max-width: 480px){
                body,table,td,p,a,li,blockquote{
                    -webkit-text-size-adjust:none !important;
                }

            }	@media only screen and (max-width: 480px){
                body{
                    width:100% !important;
                    min-width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                #bodyCell{
                    padding-top:10px !important;
                }

            }	@media only screen and (max-width: 480px){
                .Image{
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .CaptionTopContent,.CaptionBottomContent,.TextContentContainer,.BoxedTextContentContainer,.ImageGroupContentContainer,.CaptionLeftTextContentContainer,.CaptionRightTextContentContainer,.CaptionLeftImageContentContainer,.CaptionRightImageContentContainer,.ImageCardLeftTextContentContainer,.ImageCardRightTextContentContainer{
                    max-width:100% !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .BoxedTextContentContainer{
                    min-width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageGroupContent{
                    padding:9px !important;
                }

            }	@media only screen and (max-width: 480px){
                .CaptionLeftContentOuter .TextContent,.CaptionRightContentOuter .TextContent{
                    padding-top:9px !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageCardTopImageContent,.CaptionBlockInner .CaptionTopContent:last-child .TextContent{
                    padding-top:18px !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageCardBottomImageContent{
                    padding-bottom:9px !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageGroupBlockInner{
                    padding-top:0 !important;
                    padding-bottom:0 !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageGroupBlockOuter{
                    padding-top:9px !important;
                    padding-bottom:9px !important;
                }

            }	@media only screen and (max-width: 480px){
                .TextContent,.BoxedTextContentColumn{
                    padding-right:18px !important;
                    padding-left:18px !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageCardLeftImageContent,.ImageCardRightImageContent{
                    padding-right:18px !important;
                    padding-bottom:0 !important;
                    padding-left:18px !important;
                }

            }	@media only screen and (max-width: 480px){
                .mcpreview-image-uploader{
                    display:none !important;
                    width:100% !important;
                }

            }	@media only screen and (max-width: 480px){
                h1{
                    font-size:20px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                h2{
                    font-size:18px !important;
                    line-height:125% !important;
                }

            }	@media only screen and (max-width: 480px){
                h3{
                    font-size:16px !important;
                    line-height:125% !important;
                }

            }	@media only screen and (max-width: 480px){
                h4{
                    font-size:14px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                .BoxedTextContentContainer .TextContent,.BoxedTextContentContainer .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templatePreheader{
                    display:block !important;
                }

            }	@media only screen and (max-width: 480px){
                #templatePreheader .TextContent,#templatePreheader .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateHeader .TextContent,#templateHeader .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateBody .TextContent,#templateBody .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateFooter .TextContent,#templateFooter .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }
        </style>
    </head>

    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $bg ); ?>;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;background-color: <?php echo esc_attr( $bg ); ?>;">
                <tr>
                    <td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 10px;width: 100%;border-top: 0;">
                        <!-- BEGIN TEMPLATE // -->
                        <!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
<tr>
<td align="center" valign="top" width="600" style="width:600px;">
<![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;max-width: 600px !important;">
                            <tr>
                                <td valign="top" id="templatePreheader" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $body ); ?>;border-top: 0;border-bottom: 0;padding-top: 0px;padding-bottom: 0px;"></td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateHeader" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $body ); ?>;border-top: 0;border-bottom: 0;padding-top: 0px;padding-bottom: 0;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="CodeBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="TextBlockOuter">
                                            <tr>
                                                <td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="mobile-hide mobile-no-padding text-padding-left" width="450" height="110" align="left" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-left: 58px;mso-line-height-rule: exactly;">
                                                    <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;mso-line-height-rule: exactly;">
                                                        <?php
                                                            if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                            echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="120" height="20" />';
                                                            }
                                                        ?>
                                                    </a>
                                                </td>
                                                <td class="mobile-no-padding text-padding-right" height="110" width="180" align="right" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-right: 58px;mso-line-height-rule: exactly;">
                                                    <a href="https://themes.email/" target="_blank" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;mso-line-height-rule: exactly;">
                                                        <img alt="Themes.email" width="26" height="20" border="0" src="https://s3.amazonaws.com/templates.themes.email/cube/icon.png" style="padding-top: 3px;-ms-interpolation-mode: bicubic;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateBody" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $body ); ?>;border-top: 0;border-bottom: 2px solid #EAEAEA;padding-top: 0;padding-bottom: 9px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="TextBlockOuter">
                                            <tr>
                                                <td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="TextContentContainer">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="top" class="TextContent" style="padding: 9px 18px;text-align: left;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $text ); ?>;font-family: Helvetica;font-size: 13px;line-height: 150%;">
                                                                    <table border="0" cellpadding="0" cellspacing="0" max-width="564" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td id="emailcontent" style="padding-left: 7%;padding-right: 7%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                                                                    <!--  Here Goes Content: Start  -->
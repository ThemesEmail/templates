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
<html <?php language_attributes(); ?> xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/">
    <head>
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
                background-color: <?php echo esc_attr( $bg ); ?>;
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
                font-size:18px;
                font-style:normal;
                font-weight:300;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h2{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:16px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h3{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:14px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            h4{
                color:<?php echo esc_attr( $base ); ?>;
                font-family:Helvetica;
                font-size:13px;
                font-style:normal;
                font-weight:bold;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
            }
            #templatePreheader{
                background-color: <?php echo esc_attr( $bg ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:9px;
                padding-bottom:9px;
            }
            #templatePreheader .TextContent,
            #templatePreheader .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:12px;
                line-height:150%;
                text-align:left;
            }
            #templatePreheader .TextContent a,
            #templatePreheader .TextContent p a{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
            }
            #templateHeader{
                background-color: <?php echo esc_attr( $bg ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:9px;
                padding-bottom:0;
            }
            #templateHeader .TextContent,
            #templateHeader .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:16px;
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
                background-color: <?php echo esc_attr( $bg ); ?>;
                border-top:0;
                border-bottom:0;
                padding-top:9px;
                padding-bottom:9px;
            }
            #templateFooter .TextContent,
            #templateFooter .TextContent p{
                color:<?php echo esc_attr( $text ); ?>;
                font-family:Helvetica;
                font-size:12px;
                line-height:150%;
                text-align:center;
            }
            #templateFooter .TextContent a,
            #templateFooter .TextContent p a{
                color:<?php echo esc_attr( $text ); ?>;
                font-weight:normal;
                text-decoration:underline;
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
                .CaptionLeftContentOuter .TextContent, .CaptionRightContentOuter .TextContent{
                    padding-top:9px !important;
                }

            }	@media only screen and (max-width: 480px){
                .ImageCardTopImageContent,.CaptionBlockInner .CaptionTopContent:last-child .TextContent{
                    padding-top:18px !important;
                }

            }	@media only screen and (max-width: 480px){
                .TextContent,.BoxedTextContentColumn{
                    padding-right:18px !important;
                    padding-left:18px !important;
                }


            }	@media only screen and (max-width: 480px){
                h1{
                    font-size:36px !important;
                    line-height:125% !important;
                }

            }	@media only screen and (max-width: 480px){
                h2{
                    font-size:24px !important;
                    line-height:125% !important;
                }

            }	@media only screen and (max-width: 480px){
                h3{
                    font-size:18px !important;
                    line-height:125% !important;
                }

            }	@media only screen and (max-width: 480px){
                h4{
                    font-size:16px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                .BoxedTextContentContainer .TextContent,.BoxedTextContentContainer .TextContent p{
                    font-size:14px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templatePreheader{
                    display:block !important;
                }

            }	@media only screen and (max-width: 480px){
                #templatePreheader .TextContent,#templatePreheader .TextContent p{
                    font-size:16px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateHeader .TextContent,#templateHeader .TextContent p{
                    font-size:18px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateBody .TextContent,#templateBody .TextContent p{
                    font-size:13px !important;
                    line-height:150% !important;
                }

            }	@media only screen and (max-width: 480px){
                #templateFooter .TextContent,#templateFooter .TextContent p{
                    font-size:14px !important;
                    line-height:150% !important;
                }

            }
        </style>

    </head>

    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color:  <?php echo esc_attr( $bg ); ?>;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;background-color:  <?php echo esc_attr( $bg ); ?>;">
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
                                <td valign="top" id="templatePreheader" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color:  <?php echo esc_attr( $bg ); ?>;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 9px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="TextBlockOuter">
                                            <tr>
                                                <!-- logo -->
                                                <td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="197" class="TextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                        <tbody>
                                                            <tr>

                                                                <td valign="top" class="TextContent" style="padding-top: 9px;padding-left: 18px;padding-bottom: 9px;padding-right: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $text ); ?>;font-family: Helvetica;font-size: 12px;line-height: 150%;text-align: left;">

                                                                    <div class="headercontainer" position="relative" width="300px">
                                                                        <a href="https://themes.email/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: <?php echo esc_attr( $text ); ?>;font-weight: normal;text-decoration: underline;">
                                                                        <?php
                                                                            if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
                                                                            echo '<img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" width="38" height="38" />';
                                                                            }
                                                                        ?>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- Social icons -->
                                                    <table align="right" border="0" cellpadding="0" cellspacing="0" width="366" class="TextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                        <tbody>
                                                            <tr>

                                                                <td valign="top" class="TextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $text ); ?>;font-family: Helvetica;font-size: 12px;line-height: 150%;text-align: left;">

                                                                    <div class="socialheader" style="text-align: right;opacity: 0.7;">
                                                                        <a href="https://www.facebook.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:  <?php echo esc_attr( $bg ); ?>;font-weight: normal;text-decoration: underline;">
                                                                            <img align="center" height="18" src="https://s3.amazonaws.com/templates.themes.email/camel/facebook.png" style="width: 9px;height: 18px;margin: 8px 0 3px 0;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;"
                                                                                 width="9">
                                                                        </a>&nbsp; &nbsp; &nbsp;

                                                                        <a href="https://www.instagram.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:  <?php echo esc_attr( $bg ); ?>;font-weight: normal;text-decoration: underline;">
                                                                            <img align="center" height="16.5" src="https://s3.amazonaws.com/templates.themes.email/camel/instagram.png" style="width: 16px;height: 16.5px;margin: 8px 0 2px 0;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;"
                                                                                 width="16">
                                                                        </a>&nbsp; &nbsp; &nbsp;

                                                                        <a href="https://twitter.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:  <?php echo esc_attr( $bg ); ?>;font-weight: normal;text-decoration: underline;">
                                                                            <img align="center" height="14" src="https://s3.amazonaws.com/templates.themes.email/camel/twitter.png" style="width: 18px;height: 14px;margin: 8px 0 1px 0;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;"
                                                                                 width="18">
                                                                        </a>

                                                                        <hr class="invisible" style="background-color:  <?php echo esc_attr( $bg ); ?>;height: 2px;border: 0 none !important;margin: 1% 0%;"> </div>



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
                            <tr>
                                <td valign="top" id="templateHeader" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color:  <?php echo esc_attr( $bg ); ?>;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 0;"></td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateBody" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $body ); ?>;border-top: 0;border-bottom: none;padding-top: 0;padding-bottom: 0px;">
                                    <!-- Hero Image -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="ImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="ImageBlockOuter">
                                            <tr>
                                                <td valign="top" style="padding: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="ImageBlockInner">
                                                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="ImageContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td class="ImageContent" valign="top" style="padding-right: 0px;padding-left: 0px;padding-top: 0;padding-bottom: 10px !important;text-align: center;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                                                    <a href="https://themes.email/" title="" class="" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                                        <img align="center" alt="" src="https://s3.amazonaws.com/templates.themes.email/camel/hero.jpg" width="600" style="max-width: 1200px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic ;margin:0px!important;" class="Image">
                                                                    </a>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="TextBlockOuter">
                                            <tr>
                                                <td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="TextContentContainer">
                                                        <tbody>
                                                            <tr>

                                                                <td id="emailcontent" valign="top" class="TextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $text ); ?>;font-family: Helvetica;font-size: 13px;line-height: 150%;text-align: left;">

                                                                    <!--  Here Goes Content: Start  -->
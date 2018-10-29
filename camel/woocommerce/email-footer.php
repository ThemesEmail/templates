<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 *
 * @author  themes.email
 * @url     yourtheme/woocommerce/emails/email-footer.php
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

                                                                    <!--  Here Goes Content: End  -->  

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
                                <td valign="top" id="templateFooter" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: <?php echo esc_attr( $bg ); ?>;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 9px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="TextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                        <tbody class="TextBlockOuter">
                                            <tr>
                                                <td valign="top" class="TextBlockInner" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="282" class="TextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                        <tbody>
                                                            <tr>

                                                                <td valign="top" class="TextContent" style="padding: 9px 0px 9px 18px;line-height: normal;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $base ); ?>;font-family: Helvetica;font-size: 12px;text-align: center;">


                                                                    <h6 style="text-align: left;color:<?php echo esc_attr( $base ); ?>;font-weight: 400 !important;display: block;margin: 0% 3.5% 0% 3.5%;padding: 0;font-family: 'Gotham SSm A', 'Gotham SSm B', 'Arial', sans-serif !important;font-style: normal !important;font-size: 12px !important;line-height: 17px !important;">
                                                                        All Rights Reserved. © 1234<br>
                                                                        Themes Email Inc., 725 First Avenue, <br>
                                                                        Sunnyvale, CA 94089<br>
                                                                    </h6>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table align="right" border="0" cellpadding="0" cellspacing="0" width="282" class="TextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                                        <tbody>
                                                            <tr>

                                                                <td valign="top" class="TextContent" style="padding: 9px 18px;line-height: normal;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: <?php echo esc_attr( $base ); ?>;font-family: Helvetica;font-size: 12px;text-align: right;">


                                                                    <h6 style="text-align: right;color: <?php echo esc_attr( $base ); ?>;font-weight: 400 !important;display: block;margin: 0% 3.5% 0% 3.5%;padding: 0;font-family: 'Gotham SSm A', 'Gotham SSm B', 'Arial', sans-serif !important;font-style: normal !important;font-size: 12px !important;line-height: 17px !important;">
                                                                       
    <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ) ; ?>
                                                                    
                                                                    </h6>


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
                        </table>
                        <!--[if gte mso 9]>
</td>
</tr>
</table>
<![endif]-->
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
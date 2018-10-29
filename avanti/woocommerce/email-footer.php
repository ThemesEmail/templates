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
                            <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="left" style="padding-top:0px;padding-bottom:10px;padding-right:0px;padding-left:0px;color:<?php echo esc_attr( $base ); ?>;font-family:'Lato',sans-serif;font-size:14px;font-weight:400;line-height:18px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                <p style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-left:10px;"><a href="https://themes.email/" target="_blank" style="color:<?php echo esc_attr( $base ); ?>;font-weight:bold;text-decoration:none !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">Themes Email Inc.</a></p>
                            </td>
                        </tr>

                        <tr>
                            <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="left" style="padding-top:0px;padding-bottom:30px;padding-right:0px;padding-left:0px;color:#aaaaaa;font-family:'Lato',sans-serif;font-size:14px;font-weight:400;line-height:18px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;">
                                <p style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-left:10px;"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></p>
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
        </table>
    </body>

</html>
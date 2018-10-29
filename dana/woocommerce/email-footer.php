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
                                                    <tr>
                                                        <td align="left" valign="top" style="font-size:0%; line-height:100%;"><img alt="" src="https://s3.amazonaws.com/templates.themes.email/dana/spacer.gif" width="1" height="20" style="display: block; outline:none; text-decoration:none; border:none;" class="space-height-20"></td>
                                                    </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!-- Begin footer -->
                                    <tr>
                                        <td align="center" valign="top">
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                <tr>
                                                    <td align="" valign="top" style="padding:15px 30px;" class="paddingreset" bgcolor="#444444">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                            <tr>
                                                                <td align="" class="copyContainer">
                                                                    <a href="#"  target="_blank" style="text-decoration:none; color:#ffffff; font-size:10px; font-family:Helvetica,Arial,Sans-Serif;" class="footfont">Support</a>
                                                                    &nbsp;&nbsp;&nbsp;
                                                                    <a href="#"  target="_blank" style="text-decoration:none; color:#ffffff; font-size:10px; font-family:Helvetica,Arial,Sans-Serif;" class="footfont">Documentation</a>
                                                                    &nbsp;&nbsp;&nbsp;
                                                                    <a href="#"  target="_blank" style="text-decoration:none; color:#ffffff; font-size:10px; font-family:Helvetica,Arial,Sans-Serif;" class="footfont">Help Center</a>
                                                                </td>
                                                                <td class="rightsContainer" align="right" style="text-decoration:none; color:#ffffff; font-size:10px; font-family:Helvetica,Arial,Sans-Serif;">&copy; 1234 THEMES.EMAIL, Inc. All Rights Reserved.</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="" valign="top" bgcolor="<?php echo esc_attr( $body ); ?>" style="padding:20px 30px;" class="paddingreset">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                            <tr>
                                                                <td align="" valign="top" bgcolor="<?php echo esc_attr( $body ); ?>">
                                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                                        <tr>
                                                                            <td align="" valign="top" class="footTxt" style="color: <?php echo esc_attr( $text ); ?>; font-family:Helvetica,Arial,Sans-Serif; font-size:10px;" >
                                                                                <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                                                            </td>
                                                                            <td align="right" valign="top" class="footTxt" style="color: <?php echo esc_attr( $base ); ?>; font-family:Helvetica,Arial,Sans-Serif; font-size:10px; padding:20px 40px;">
                                                                                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                                                    <tr>
                                                                                        <td align="center" valign="top" style="text-decoration:none; color: <?php echo esc_attr( $base ); ?>; font-weight:bold; font-family:Helvetica,Arial,Sans-Serif; font-size:10px;">
                                                                                            keep in touch:
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" valign="top" style="padding-top: 5px;">
                                                                                            <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                                                                <tr>
                                                                                                    <td valign="top" class="footface"><a href="#" target="_blank" ><img src="https://s3.amazonaws.com/templates.themes.email/dana/facebook.jpg" width="9" height="16" alt="Facebook" border="0" style="display:block; font:9px Arial, Helvetica, sans-serif; color:<?php echo esc_attr( $text ); ?>;"></a></td>
                                                                                                    <td valign="top" class="socialspace" style="padding: 0px 9px;"><a href="#" target="_blank" ><img src="https://s3.amazonaws.com/templates.themes.email/dana/twitter.jpg" width="19" height="16" alt="Twitter" border="0" style="display:block; font:9px Arial, Helvetica, sans-serif; color:<?php echo esc_attr( $text ); ?>;"></a></td>
                                                                                                    <td valign="top" class="socialspace"><a href="#" target="_blank" ><img src="https://s3.amazonaws.com/templates.themes.email/dana/instagram.jpg" width="15" height="16" alt="Instagram" border="0" style="display:block; font:9px Arial, Helvetica, sans-serif; color:<?php echo esc_attr( $text ); ?>;"></a></td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>


                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
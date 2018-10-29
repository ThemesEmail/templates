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
                                                                                                       
                                                                                                        <!-- Here Goes Content: End -->

                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <!-- END Content -->

                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END Main -->

                                                        <!-- Footer -->
                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20">&nbsp;</td>

                                                                    <td align="center">
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="28" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <!-- Social icons -->
                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center">
                                                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="60">
                                                                                                        <a href="https://www.facebook.com/" target="_blank"><img src="https://s3.amazonaws.com/templates.themes.email/hipster/social/fb.png" width="40" height="40" alt="Facebook" border="0"></a>
                                                                                                    </td>
                                                                                                    <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="60">
                                                                                                        <a href="https://twitter.com/" target="_blank"><img src="https://s3.amazonaws.com/templates.themes.email/hipster/social/tw.png" width="40" height="40" alt="Twitter" border="0"></a>
                                                                                                    </td>
                                                                                                    <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="60">
                                                                                                        <a href="https://www.instagram.com/" target="_blank"><img src="https://s3.amazonaws.com/templates.themes.email/hipster/social/insta.png" width="40" height="40" alt="Instagram" border="0"></a>
                                                                                                    </td>
                                                                                                    <td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="60">
                                                                                                        <a href="https://plus.google.com/" target="_blank"><img src="https://s3.amazonaws.com/templates.themes.email/hipster/social/gp.png" width="40" height="40" alt="G+" border="0"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <!-- End Social icons -->
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="22" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <div class="footer" style="color:<?php echo esc_attr( $text ); ?>; font-family: Helvetica,Roboto,Arial,sans-serif; font-size:12px; line-height:20px; text-align:center">
                                                                            <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                                                        </div>

                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td height="20" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>

                                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- End Footer -->
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
            </tbody>
        </table>
    </body>
</html>
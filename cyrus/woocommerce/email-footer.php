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
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 0px 0px 40px;">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <!-- Footer -->
        <table bgcolor="<?php echo esc_attr( $bg ); ?>" border="0" cellpadding="0" cellspacing="0" width="100%"
               style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
            <tbody>
                <tr>
                    <td align="center" style="mso-line-height-rule: exactly; mso-table-lspace: 0; mso-table-rspace: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding: 40px 0 40px;">
                        <a href="https://themes.email/"
                           style="-webkit-appearance: none; -moz-appearance: none; text-decoration: none; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
                            <img src="https://s3.amazonaws.com/templates.themes.email/cyrus/logo-bottom.png" style="-ms-interpolation-mode: bicubic; max-width: 150px;">
                        </a>
                        <br>
                        <p class="footer" style="margin-bottom: 1em; -webkit-margin-before: 0; -webkit-margin-after: 0; color: #DADADA; font-size: 12px; text-decoration: none; margin: 20px 0 10px;"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></p>
                        <p
                           class="footer" style="margin-bottom: 1em; -webkit-margin-before: 0; -webkit-margin-after: 0; color: #DADADA; font-size: 12px; text-decoration: none; margin: 10px 0;">All Rights Reserved. © 1234 Themes Email Inc.</p>
                        <p class="footer" style="margin-bottom: 1em; -webkit-margin-before: 0; -webkit-margin-after: 0; color: #DADADA; font-size: 12px; text-decoration: none; margin: 10px 0;">725 First Avenue, Sunnyvale, CA 94089</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
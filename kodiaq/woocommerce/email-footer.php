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

                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table class="footer container" width="560" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; border-spacing: 0; display: block !important; max-width: 600px !important; clear: both !important; color: #939598; margin: 0 auto; padding: 30px 0;">
                            <tr style="box-sizing: border-box; ">
                                <td class="aligncenter container" width="560" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; text-align: center; margin: 0 auto; padding: 0;"
                                    align="center" valign="top">
                                    <p class="address" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; font-size: 12px; color: #939598; font-weight: normal; line-height: 1.6; margin: 0px 0px 6px; padding: 0;"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></p>
                                </td>
                            </tr>
                            <tr style="box-sizing: border-box; ">
                                <td class="aligncenter social-media-logos container" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; text-align: center; margin: 0 auto;"
                                    align="center" valign="top">
                                    <a href="https://www.facebook.com/" target="_blank" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: #939598; text-decoration: none; margin: 0px 4px; ">
                                        <img src="https://s3.amazonaws.com/templates.themes.email/kodiaq/facebook.png" width="16" alt="Facebook" style="-ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%;  border: 0;">
                                    </a>
                                    <a href="https://twitter.com/" target="_blank" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: #939598; text-decoration: none; margin: 0px 4px;">
                                        <img src="https://s3.amazonaws.com/templates.themes.email/kodiaq/twitter.png" width="16" alt="Twitter" style="-ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%;  border: 0;">
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: #939598; text-decoration: none; margin: 0px 4px;">
                                        <img src="https://s3.amazonaws.com/templates.themes.email/kodiaq/instagram.png" width="16" alt="Instagram" style="-ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%;  border: 0;">
                                    </a>
                                    <a href="http://www.linkedin.com/" target="_blank" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; box-sizing: border-box; color: #939598; text-decoration: none; margin: 0px 4px; ">
                                        <img src="https://s3.amazonaws.com/templates.themes.email/kodiaq/linkedin.png" width="16" alt="LinkedIn" style="-ms-interpolation-mode: bicubic; height: auto; line-height: 100%; outline: none; text-decoration: none; box-sizing: border-box; max-width: 100%;  border: 0;">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; vertical-align: top; " valign="top"></td>
            </tr>
        </table>
    </body>
</html>
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
                </td>
            </tr>

            <tr style="padding: 0px;-webkit-text-size-adjust: none;">
                <td style="padding: 0px;-webkit-text-size-adjust: none;">
                    <!-- Start Footer -->
                    <table cellpadding="10" cellspacing="0" align="center" border="0" width="100%"
                           style="text-align: left;font-weight: 500;font-family: helvetica,arial,sans-serif;table-layout: fixed;-webkit-text-size-adjust: none;">
                        <tr style="-webkit-text-size-adjust: none;">
                            <td style="-webkit-text-size-adjust: none;">
                                <table width="100%" align="center" cellspacing="0" cellpadding="10" style="max-width: 600px;table-layout: fixed;-webkit-text-size-adjust: none;">
                                    <tr style="background-color: <?php echo esc_attr( $base ); ?>;text-align: left;-webkit-text-size-adjust: none; height: 60px;">
                                        <td style="-webkit-text-size-adjust: none; vertical-align: middle;">
                                            <table width="96%" style="max-width: 600px;padding: 5px 0px;-webkit-text-size-adjust: none;"
                                                   align="center">
                                                <tr style="-webkit-text-size-adjust: none;">
                                                    <td style="-webkit-text-size-adjust: none; vertical-align: middle;">
                                                        <table class="social" style="-webkit-text-size-adjust: none;">
                                                            <tr style="-webkit-text-size-adjust: none;">
                                                                <td style="-webkit-text-size-adjust: none;">
                                                                    <a href="https://www.facebook.com/"
                                                                       style="-webkit-text-size-adjust: none;">
                                                                        <img src="https://s3.amazonaws.com/templates.themes.email/zala/facebook.png" alt="facebook" width="16px" style="padding: 5px;display: block;-webkit-text-size-adjust: none;">
                                                                    </a>
                                                                </td>
                                                                <td style="-webkit-text-size-adjust: none;">
                                                                    <a href="https://www.instagram.com/"
                                                                       style="-webkit-text-size-adjust: none;">
                                                                        <img src="https://s3.amazonaws.com/templates.themes.email/zala/instagram.png" alt="instagram" width="18px" style="padding: 5px;display: block;-webkit-text-size-adjust: none;" class="instagram">
                                                                    </a>
                                                                </td>
                                                                <td style="-webkit-text-size-adjust: none;">
                                                                    <a href="https://www.pinterest.com/"
                                                                       style="-webkit-text-size-adjust: none;">
                                                                        <img src="https://s3.amazonaws.com/templates.themes.email/zala/pinterest.png" alt="pinterest" width="16px" style="padding: 5px;display: block;-webkit-text-size-adjust: none;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td align="right" style="-webkit-text-size-adjust: none; vertical-align: middle;">
                                                        <table style="-webkit-text-size-adjust: none;">
                                                            <tr style="-webkit-text-size-adjust: none;">
                                                                <td style="-webkit-text-size-adjust: none;">
                                                                    <a href="https://themes.email/" style="-webkit-text-size-adjust: none;">
                                                                        <img class="app-link" src="https://s3.amazonaws.com/templates.themes.email/zala/emailtemplates.png" alt="App Link" width="170px" style="display: block;-webkit-text-size-adjust: none;">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="background: <?php echo esc_attr( $bg ); ?>;-webkit-text-size-adjust: none;">
                                        <td align="center" style="-webkit-text-size-adjust: none;">
                                            <table width="90%" cellpadding="4" style="font-size: 10px;font-family: helvetica,arial,sans-serif;font-weight: 200;letter-spacing: 1px;line-height: 1.6em;color: #A6A8AB;text-align: center;-webkit-text-size-adjust: none;">
                                                <tr style="-webkit-text-size-adjust: none;">
                                                    <td style="-webkit-text-size-adjust: none;">
                                                        <p style="-webkit-text-size-adjust: none;">
                                                            <a href="https://themes.email/" style="color: <?php echo esc_attr( $base ); ?>;font-weight: bold;-webkit-text-size-adjust: none;">Themes Email, Inc.</a>
                                                        </p>
                                                        <p style="-webkit-text-size-adjust: none;"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></p>
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
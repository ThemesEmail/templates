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
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <!-- FOOTER -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
            <tr>
                <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center" style="padding-top:5px; padding-right:15px; padding-bottom:5px; padding-left:15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table">
                        <!-- CONTENT -->
                        <tr>
                            <!-- SOCIAL COLUMN -->
                            <td bgcolor="<?php echo esc_attr( $bg ); ?>" align="center">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center" style="padding-right: 20px">
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <img alt="Facebook" src="https://s3.amazonaws.com/templates.themes.email/tristan/facebook.png" width="18" height="18" style="height: auto; display: block; font-family: Helvetica,Arial,sans-serif; color: #666666; font-size: 10px;"
                                                     border="0">
                                            </a>
                                        </td>
                                        <td align="center" style="padding-right: 20px">
                                            <a href="https://twitter.com/" target="_blank">
                                                <img alt="Twitter" src="https://s3.amazonaws.com/templates.themes.email/tristan/twitter.png" width="18" height="18" style="height: auto; display: block; font-family: Helvetica,Arial,sans-serif; color: #666666; font-size: 10px;"
                                                     border="0">
                                            </a>
                                        </td>
                                        <td align="center" style="padding-right: 20px">
                                            <a href="https://plus.google.com/" target="_blank">
                                                <img alt="Google+" src="https://s3.amazonaws.com/templates.themes.email/tristan/google.png" width="22" height="18" style="height: auto; display: block; font-family: Helvetica,Arial,sans-serif; color: #666666; font-size: 10px;"
                                                     border="0">
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <img alt="Instagram" src="https://s3.amazonaws.com/templates.themes.email/tristan/instagram.png" width="18" height="18" style="height: auto; display: block; font-family: Helvetica,Arial,sans-serif; color: #666666; font-size: 10px;"
                                                     border="0">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="margin-top: 47px; line-height:22px; font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #999; width: 100%;" class="contenttable" cellspacing="0" cellpadding="0">
            <tr>
                <td>&nbsp;</td>
                <td style="border-top-style:solid; border-top-width:1px; border-top-color:#ddd; width: 640px; text-align: center; padding-top: 8px; padding-bottom: 8px;">
                    <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                    </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>
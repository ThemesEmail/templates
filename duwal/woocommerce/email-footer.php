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
                            <td style="padding-top: 30px"></td>
                        </tr>
                        <tr class="tc" style="text-align: center" align="center">
                            <td class="f24 lh-title" style="border-collapse: separate; border-top-color: #cccccc; border-top-style: solid; border-top-width: 1px; font-size: 24px; line-height: 1.2; padding: 30px 0 15px; color:<?php echo esc_attr( $text ); ?>;">Stay in Touch</td>
                        </tr>
                        <tr class="tc" style="text-align: center" align="center">
                            <td class="f18 lh-copy" style="color:<?php echo esc_attr( $text ); ?>; font-size: 18px; line-height: 1.4">If you have any questions or suggestions,
                                <br>please email us:
                                <a href="mailto:hello@themes.email" style="color:<?php echo esc_attr( $base ); ?>">hello@themes.email</a>
                            </td>
                        </tr>
                        <tr class="tc" style="text-align: center" align="center">
                            <td style="padding-top: 30px; color:<?php echo esc_attr( $text ); ?>;">
                                <a style="display: inline-block" href="#">
                                    <img style="border: 0; display: inline-block; outline: none; text-decoration: none" alt="Twitter logo" src="https://s3.amazonaws.com/templates.themes.email/duwal/twitter.jpg">
                                </a>
                                <a style="display: inline-block; padding: 0 25px" href="#">
                                    <img style="border: 0; display: inline-block; outline: none; text-decoration: none" alt="Facebook logo" src="https://s3.amazonaws.com/templates.themes.email/duwal/facebook.jpg">
                                </a>
                                <a style="display: inline-block" href="#">
                                    <img style="border: 0; display: inline-block; outline: none; text-decoration: none" alt="Instagram logo" src="https://s3.amazonaws.com/templates.themes.email/duwal/instagram.jpg">
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table class="tc" style="background: <?php echo esc_attr( $bg ); ?>; margin: 30px auto; max-width: 768px; text-align: center; width: 100%" bgcolor="<?php echo esc_attr( $bg ); ?>">
                        <tr>
                            <td class="f14" style="color: #999999; font-size: 14px">
                                <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
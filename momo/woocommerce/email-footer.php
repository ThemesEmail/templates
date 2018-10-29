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
                        <div class="spacer" style="line-height:25px;height:25px;">
                        </div>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="slogan" style="width:100%;max-width:650px;margin:0 auto;text-align:center;background-color:<?php echo esc_attr( $base ); ?>;">
                            <tbody>
                                <tr>
                                    <td align="center" style="padding-top:15px;padding-bottom:15px;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:650px;text-align:center;margin:0 auto;width:90%;max-width:590px;">
                                            <tbody>
                                                <tr>
                                                    <td class="left" style="padding:10px 20px;text-align:left;">
                                                        <img height="32" src="https://s3.amazonaws.com/templates.themes.email/momo/cart.png" style="display:block;border:none;display: block;" width="32">
                                                    </td>
                                                    <td class="right" style="padding-top:22px;padding-bottom:22px;text-align:left;padding-right:13px;width:100%;color:#ffffff;">
                                                        <p style="font-family: Avenir,Verdana,Geneva,sans-serif;margin:0;font-weight:100;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-decoration:none;color:#4A4A4A;font-size:15px;line-height:21px;">
                                                            <a class="slogan" href="#" style="text-decoration:none;color:#4A4A4A;" target="_blank">
                                                                the #1 marketplace of Email Templates for E-Commerce Websites&nbsp;&gt;
                                                            </a>
                                                        </p>
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
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="frame" style="margin:0 auto;text-align:center;width:650px;max-width:100%;">
            <tbody>
                <tr>
                    <td align="center">
                        <div class="spacer" style="line-height:25px;height:25px;">
                        </div>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="social" style="margin:0 auto;text-align:center;width:90%;max-width:385px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" style="text-decoration:none;" target="_blank"> 
                                            <img alt="" height="37" src="https://s3.amazonaws.com/templates.themes.email/momo/fb.png" style="display:block;border:none;margin:0;vertical-align:top;display:inline-block !important;" width="37">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" style="text-decoration:none;" target="_blank">
                                            <img alt="" height="37" src="https://s3.amazonaws.com/templates.themes.email/momo/gp.png" style="display:block;border:none;margin:0;vertical-align:top;display:inline-block !important;" width="37">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" style="text-decoration:none;" target="_blank"> 
                                            <img alt="" height="37" src="https://s3.amazonaws.com/templates.themes.email/momo/pin.png" style="display:block;border:none;margin:0;vertical-align:top;display:inline-block !important;" width="37"> 
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" style="text-decoration:none;" target="_blank"><img alt="" height="37" src="https://s3.amazonaws.com/templates.themes.email/momo/tw.png" style="display:block;border:none;margin:0;vertical-align:top;display:inline-block !important;" width="37"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="spacerx05" style="line-height:26px;height:26px;">
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" class="footer-divider" style="width:100%;max-width:650px;margin:0 auto;text-align:center;border-top:1px solid #f1f1f1;width:590px;height: 10px;">
                            <tbody>
                                <tr>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="address" style="margin:0 auto;text-align:center;max-width:90%;vertical-align:middle !important;">
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="font-family: Avenir,Verdana,Geneva,sans-serif;margin:0;font-weight:400;text-decoration:none;font-size:13px;line-height:21px;color:#757578;text-align:center;"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="spacerx05" style="line-height:12px;height:12px;"></div>
    </body>  
</html>
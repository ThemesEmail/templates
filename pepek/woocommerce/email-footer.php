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
                                    <tr>
                                        <td class="m_w280 m_pl20 m_pr20" width="580" align="center" style="padding-right30px;padding-left:30px;background-color:<?php echo esc_attr( $body ); ?>">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                                <tr>
                                                    <td class="m_plr0" align="center" style="padding-right:35px;padding-left:35px;">
                                                        <a href="https://themes.email/"
                                                           style="text-decoration:none;display:block">
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td align="center" style="padding-top:14px;padding-bottom:14px;padding-right:20px;padding-left:20px;background-color:<?php echo esc_attr( $base ); ?>;border-radius:4px">
                                                                        <a class="m_overflow280" href="https://themes.email/" style="font-family: helvetica,arial,sans-serif;font-weight:bold;font-size:18px;line-height:22px;color:#ffffff;text-decoration:none;display:block;text-align:center;;max-width:400px;overflow:hidden;text-overflow:ellipsis">
                                                                            Visit Our Store</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
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
                </td>
            </tr>
        </table>
        <table class="m_bg_white" width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $bg ); ?>;">
            <tr>
                <td align="center">
                    <table class="m_w320" width="580" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:<?php echo esc_attr( $bg ); ?>">
                        <tr>
                            <td class="m_w280 m_pl20 m_pr20" align="center" style="padding-right:30px;padding-left:30px;">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                    <tr>
                                        <td align="center" valign="bottom" height="30" style="padding-top:30px;padding-bottom:30px;font-family: helvetica,arial,sans-serif;font-size:18px;line-height:28px;font-weight:bold;color:#a7a7a7">
                                            <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
    </body>
</html>
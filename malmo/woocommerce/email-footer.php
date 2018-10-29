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
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
                    <!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<![endif]-->
                    <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 600px; max-width: 600px;font-family: Helvetica,arial,sans-serif;">
                        <tr>
                            <td style="padding-top: 24px;">
                                <table cellspacing="0" cellpadding="0" width="100%">
                                    <tr>
                                        <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="footer-nav">
                            <td class="grid-col" style="font-family: Helvetica,arial,sans-serif; padding: 9px 0; text-align: center;">
                                <table cellspacing="0" cellpadding="0" width='100%' style='' align='' class="col-layout">
                                    <tr style='' class=''>
                                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; ' align='center'
                                            valign='middle' class='col-nav-items' colspan='1'>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif; font-size: 11px; color: <?php echo esc_attr( $text ); ?>; text-transform: uppercase;" href="https://themes.email/magento.html"
                                                   class="">Magento</a>
                                            </table>
                                        </td>
                                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px;' align='center'
                                            valign='middle' class='col-nav-items' colspan='1'>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif; font-size: 11px; color: <?php echo esc_attr( $text ); ?>; text-transform: uppercase;" href="https://themes.email/prestashop.html"
                                                   class="">Prestashop</a>
                                            </table>
                                        </td>
                                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px;' align='center'
                                            valign='middle' class='col-nav-items' colspan='1'>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif; font-size: 11px; color: <?php echo esc_attr( $text ); ?>; text-transform: uppercase;" href="https://themes.email/woocommerce.html"
                                                   class="">Woocommerce</a>
                                            </table>
                                        </td>
                                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px;' align='center'
                                            valign='middle' class='col-nav-items' colspan='1'>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif; font-size: 11px; color: <?php echo esc_attr( $text ); ?>; text-transform: uppercase;" href="https://themes.email/"
                                                   class="">Wordpress</a>
                                            </table>
                                        </td>
                                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px;' align='center'
                                            valign='middle' class='col-nav-items' colspan='1'>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif; font-size: 11px; color: <?php echo esc_attr( $text ); ?>; text-transform: uppercase;" href="https://themes.email/"
                                                   class="">EDD</a>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%">
                                    <tr>
                                        <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="grid-col" style="font-family: Helvetica,arial,sans-serif; padding: 24px 0; text-align: center;">
                                <div style="color: <?php echo esc_attr( $text ); ?>; font-weight: 400; font-size: 13px; line-height: 18px; font-family: Helvetica,arial,sans-serif; font-weight: 300; padding-bottom: 6px;" class="">
                                    <a style="text-decoration: none; color: <?php echo esc_attr( $base ); ?>; font-family: Helvetica,arial,sans-serif;" href="https://themes.email/" class="">Themes Email</a> | 725 First Avenue, Sunnyvale, CA 94089</div>
                                <div style="color: <?php echo esc_attr( $text ); ?>; font-weight: 400; font-size: 13px; line-height: 18px; font-family: Helvetica,arial,sans-serif; font-weight: 300; " class=""><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></div>
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
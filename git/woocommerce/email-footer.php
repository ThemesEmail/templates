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
                            <td align="center" class="footer" style="vertical-align:top; padding-top:30px; text-align:center">
                                <table cellpadding="0" cellspacing="0" id="footer" style="width:250px; margin:0 auto" width="250">
                                    <tr>
                                        <td align="center" style="text-align:center; color:#7B858B!important; vertical-align:middle; padding:0px 5px" valign="middle">
                                            <a href="https://themes.email/magento.html" style="color:#7B858B!important; font-weight:bold; text-decoration:none; font-size:12px" target="_blank">MAGENTO</a>
                                        </td>
                                        <td align="center" style="text-align:center; color:#7B858B!important; vertical-align:middle; padding:0px 5px">
                                            <img alt="bullet" height="4" src="https://s3.amazonaws.com/templates.themes.email/git/bullet.png" style="max-width:100%; vertical-align:middle" width="4" />
                                        </td>
                                        <td align="center" style="text-align:center; color:#7B858B!important; vertical-align:middle; padding:0px 5px">
                                            <a href="https://themes.email/prestashop.html" style="color:#7B858B!important; font-weight:bold; text-decoration:none; font-size:12px" target="_blank">PRESTASHOP</a>
                                        </td>
                                        <td align="center" style="text-align:center; color:#7B858B!important; vertical-align:middle; padding:0px 5px">
                                            <img alt="bullet" height="4" src="https://s3.amazonaws.com/templates.themes.email/git/bullet.png" style="max-width:100%; vertical-align:middle" width="4" />
                                        </td>
                                        <td align="center" style="text-align:center; color:#7B858B!important; vertical-align:middle; padding:0px 5px" valign="middle">
                                            <a href="https://themes.email/woocommerce.html" style="color:#7B858B!important; font-weight:bold; text-decoration:none; font-size:12px" target="_blank">WOOCOMMERCE</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="copyright" colspan="5" style="text-align:center; vertical-align:middle; padding:0px 5px; font-size:11px; padding-top:20px; color:#7B858B"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></td>
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


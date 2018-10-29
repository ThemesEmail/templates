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
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if gte mso 9]>
</td>
</tr>
</table>
<![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" id="templateFooter" style="padding-right:30px; padding-left:30px;">
                                            <!--[if gte mso 9]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
<tr>
<td align="center" valign="top" width="640">
<![endif]-->
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:640px;" class="emailContainer">
                                                <tbody>
                                                    <tr>
                                                        <td id="footerContent" valign="top" style="border-top-width:2px;border-top-color:#F2F2F2;border-top-style:solid;color:#B7B7B7;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:400; line-height:24px; padding-top:40px; padding-bottom:20px; text-align:center;">
                                                            <p style="color:#B7B7B7;font-family: Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:24px;padding:0;margin:0;text-align:center;">
                                                                <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                                            </p>
                                                            <a href="https://themes.email/magento.html" target="_blank" style="color:#B7B7B7; text-decoration:underline;" class="utilityLink">Magento</a>
                                                            <span class="mobileHide"> &nbsp; • &nbsp; </span>
                                                            <a href="https://themes.email/prestashop.html" target="_blank" style="color:#B7B7B7; text-decoration:underline;" class="utilityLink">Prestashop</a>
                                                            <span class="mobileHide"> &nbsp; • &nbsp; </span>
                                                            <a href="https://themes.email/woocommerce.html" target="_blank" style="color:#B7B7B7; text-decoration:underline;" class="utilityLink">WooCommerce</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--[if gte mso 9]>
</td>
</tr>
</table>
<![endif]-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>

    </body>
</html>

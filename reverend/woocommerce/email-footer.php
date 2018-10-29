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
                                                                        <tr>
                                                                            <td width="100%" height="15" style="border-collapse: collapse;"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="50" style="border-collapse: collapse;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="border-collapse: collapse;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $body ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="border-collapse: collapse;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $text ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" id="emailFooter">
                                    <tbody>
                                        <tr>
                                            <td width="100%" height="35" style="border-collapse: collapse;"></td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" class="footerContent" style="padding: 0; border-collapse: collapse;">
                                                <a href="https://www.facebook.com/" target="_blank" style="text-decoration: none;border: 0;color:  <?php echo esc_attr( $base ); ?> !important;">
                                                    <img class="social" style="width: 30px; display: inline-block; outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic;" border="0" alt="" src="https://s3.amazonaws.com/templates.themes.email/reverend/facebook.png"></a>
                                                <!--[if (gte mso 9)|(IE)]>
&nbsp;&nbsp;&nbsp;&nbsp;
<![endif]-->
                                                <a href="https://twitter.com/" target="_blank" style="text-decoration: none;border: 0;color:  <?php echo esc_attr( $base ); ?> !important;">
                                                    <img class="social" style="width: 30px; display: inline-block; padding-left: 10px; padding-right: 10px; outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic;" border="0" alt="" src="https://s3.amazonaws.com/templates.themes.email/reverend/twitter.png"></a>
                                                <!--[if (gte mso 9)|(IE)]>
&nbsp;&nbsp;&nbsp;&nbsp;
<![endif]-->
                                                <a href="https://www.instagram.com/" target="_blank" style="text-decoration: none;border: 0;color:  <?php echo esc_attr( $base ); ?> !important;">
                                                    <img class="social" style="width: 30px; display: inline-block; outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic;" border="0" alt="" src="https://s3.amazonaws.com/templates.themes.email/reverend/instagram.png"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15" style="border-collapse: collapse;"></td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="border-collapse: collapse;">
                                                <table border="0" cellpadding="5" cellspacing="0" class="utilityLink">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="top" class="utilityLinkContent">
                                                                <a class="footerLink" href="https://themes.email/magento.html" style="font-family: Arial,sans-serif; font-size:12px; font-weight:400; color: #e6e7e8 !important; text-decoration: none;" target="_blank">Magento</a>
                                                            </td>
                                                            <td valign="top" class="utilityLinkContent">
                                                                <a class="footerLink" href="https://themes.email/prestashop.html" style="font-family: Arial,sans-serif; font-size:12px; font-weight:400; color: #e6e7e8 !important; text-decoration: none;" target="_blank">Prestashop</a>
                                                            </td>
                                                            <td valign="top" class="utilityLinkContent">
                                                                <a class="footerLink" href="https://themes.email/woocommerce.html" style="font-family: Arial,sans-serif; font-size: 12px; font-weight:400; color: #e6e7e8 !important; text-decoration: none;" target="_blank">WooCommerce</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="45" style="border-collapse: collapse;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block">
                                <table width="100%" bgcolor="<?php echo esc_attr( $bg ); ?>" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tbody>
                                        <tr>
                                            <td align="center" style="border-collapse: collapse;">
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%" height="10" align="center" style="text-align: center; border-collapse: collapse;line-height:1.38;margin-top:0pt;margin-bottom:0pt;color:<?php echo esc_attr( $text ); ?>;font-family:arial; font-size:12px; vertical-align:baseline;">
                                                                <?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
</center>
<![endif]-->

    </body>
</html>
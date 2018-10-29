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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="58" class="mobile-hide spacer" bgcolor="<?php echo esc_attr( $bg ); ?>" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 10px;width: 1%;"></td>
                </tr>
                <tr>
                    <td class="footer" colspan="3" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <tbody>
                                <tr>
                                    <td class="text-padding-left text-padding-right" height="115" align="center" bgcolor="<?php echo esc_attr( $bg ); ?>" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-left: 58px;padding-right: 58px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="wrapper" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                            <tbody>
                                                <tr>
                                                    <td align="center" class="footer-links" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-size: 10px;line-height: 18px;font-weight: 600;font-family: Helvetica,Arial,sans-serif;color: #797979;letter-spacing: 1px;padding-top: 31px;text-transform: uppercase;">
                                                        <a href="https://themes.email/magento.html" class="original-only" style="text-decoration: none;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #797979;">Magento</a> <span class="original-only">•</span>
                                                        <a href="https://themes.email/prestashop.html" class="original-only" style="text-decoration: none;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #797979;">Prestashop</a> <span class="original-only">•</span>
                                                        <a href="https://themes.email/woocommerce.html" class="original-only" style="text-decoration: none;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #797979;">Woocommerce</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" class="footer-copy" valign="middle" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #797979;padding-top:6px; padding-right:0px; padding-bottom: 10px; padding-left: 0px;font-family: Helvetica,Arial,sans-serif;font-size: 12px;">
                                                        <span class="appleFooter"><?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="footer-logo" align="center" valign="middle" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-bottom: 56px;">
                                                        <a href="https://themes.email/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #797979;">
                                                            <img src="https://s3.amazonaws.com/templates.themes.email/zyz/icon2x.png" width="19" height="15" alt="icon" style="-ms-interpolation-mode: bicubic;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;padding-top:11px; padding-right: 0px; padding-bottom: 45px; padding-left: 0px;" />
                                                        </a>
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
    </body>
</html>

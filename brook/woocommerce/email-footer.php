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
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                                    <!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-top: 3px double #E2E3E4;background-color: transparent;margin-top: 20px;border-collapse: collapse !important;">
                                        <tr>
                                            <td valign="top" class="footerContent threeColumn" style="width: 33%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-top: 20px;padding-right: 0;padding-bottom: 20px;padding-left: 0;text-align: left;">
                                                <h5 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 12px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 11px;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $text ); ?> !important;">Get Social</h5>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://www.facebook.com/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Facebook</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://www.instagram.com/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Instagram</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://twitter.com/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Twitter</a></h6>

                                            </td>
                                            <td valign="top" class="footerContent threeColumn" style="width: 33%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-top: 20px;padding-right: 0;padding-bottom: 20px;padding-left: 0;text-align: left;">
                                                <h5 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 12px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 11px;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $text ); ?> !important;">Systems</h5>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/magento.html" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Magento</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/prestashop.html" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Prestashop</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/woocommerce.html" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Woocommerce</a></h6>

                                            </td>
                                            <td valign="top" class="footerContent threeColumn" style="width: 33%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-top: 20px;padding-right: 0;padding-bottom: 20px;padding-left: 0;text-align: left;">
                                                <h5 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 12px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 11px;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $text ); ?> !important;">Customer Care</h5>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Help</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/submit-ticket" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Ticket</a></h6>

                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 150%;letter-spacing: 0.2em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;"><a href="https://themes.email/contact/" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: <?php echo esc_attr( $base ); ?>;font-weight: normal;text-decoration: none;">Contact</a></h6>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="center" class="footerContent footerBottom" colspan="3" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;padding-top: 20px;padding-right: 12px;padding-bottom: 20px;padding-left: 12px;text-align: left;margin-top: 20px;border-top: 1px solid #E2E3E4;">
                                                <h6 style="display: block;font-family: 'Trebuchet MS',Arial,sans-serif;font-size: 10px;font-style: normal;font-weight: normal;line-height: 200%;letter-spacing: 0.3em;text-transform: uppercase;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;text-align: center;color: <?php echo esc_attr( $base ); ?> !important;">
<?php echo wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ); ?></h6>

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>

</html>

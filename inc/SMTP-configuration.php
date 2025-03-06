<?php
/**
 * This function will connect wp_mail to your authenticated
 * SMTP server. This improves reliability of wp_mail, and
 * avoids many potential problems.
 *
 * Variables are stored in settings.php file
 *
 * Goal: Security leaks
 */

function send_smtp_email( $phpmailer ) {
        if ( ! is_object( $phpmailer ) ) {
                $phpmailer = (object) $phpmailer;
        }

        $phpmailer->Mailer     = 'smtp';
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->SMTPAuth   = SMTP_AUTH;
        $phpmailer->Port       = SMTP_PORT;
        $phpmailer->Username   = SMTP_USER;
        $phpmailer->Password   = SMTP_PASS;
        $phpmailer->SMTPSecure = SMTP_SECURE;
        $phpmailer->From       = SMTP_FROM;
        $phpmailer->FromName   = SMTP_FROM_NAME;
}

add_action( 'phpmailer_init', 'send_smtp_email' );

?>

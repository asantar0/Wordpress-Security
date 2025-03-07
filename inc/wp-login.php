<?php
/* Customize login image - wp-login.php page
 * Goal: Dismiss pishing attacks.
 * */
function my_login_logo_one() {
?>
	<style type="text/css">
	body.login div#login h1 a {
 		background-image: url(https://example.com/wp-content/uploads/YYYY/MM/sample-image.png);
	}
	</style>
<?php
} 

add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

/* Remote "Lost your password?" option - wp-login.php page
 * Goal: Dismiss DDoS attacks.
 * */
function remove_lostpassword_text ( $text ) {
     if ($text == 'Lost your password?'){$text = '';}
        return $text;
     }
}

add_filter( 'gettext', 'remove_lostpassword_text' );

/* Remote "Lost your password?" option - wp-login.php page
 * Goal: Dismiss DDoS attacks.
 * */
function login_warning( $message ) {
    if ( empty($message) ){
        echo '<p style="text-align: center; font-size:xx-large ; font-style: bold; font-family: courier;"><strong>El Nogal Web</strong></p></br><p style="text-align: justify; font-family: courier; color:red;">Todas las conexiones son monitoreadas y auditadas. Si no sos un usuario autorizado, salga de INMEDIATO.</p></br><p style="text-align: justify; font-family: courier; color:red;">All connections are monitored and recorded. Disconnect IMMEDIATELY if you are not an authorized user.</p></br>';
    } else {
        return $message;
    }
}

add_filter( 'login_message', 'login_warning' );

/* Change default message wrong username/password - wp-login.php page
 * Goal: Avoid giving information about what parameter is wrong.
 * */
add_filter( 'login_errors', function( $error ) {
	global $errors;
	$err_codes = $errors->get_error_codes();

        // Invalid username.
	// Default: '<strong>ERROR</strong>: Invalid username. <a href="%s">Lost your password</a>?'
        if ( in_array( 'invalid_username', $err_codes ) ) {
	        $error = '<strong>ERROR</strong>: ERROR.';
        }

        // Incorrect password.
        // Default: '<strong>ERROR</strong>: The password you entered for the username <strong>%1$s</strong> is incorrect. <a href="%2$s">Lost your password</a>?'
        if ( in_array( 'incorrect_password', $err_codes ) ) {
		$error = '<strong>ERROR</strong>: ERROR.';
        }

        return $error;
} );

?>

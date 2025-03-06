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

//Warning message - wp-login.php page
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

?>

/*
 * It's used the public IP "177.178.179.180" in order to give an example.
 */

function restrict_rest_api_to_localhost() {
	$whitelist = [ '127.0.0.1', "::1", "177.178.179.180"];

	if( ! in_array($_SERVER['REMOTE_ADDR'], $whitelist ) ){
		die( 'REST API is disabled.' );
	}
}

add_action( 'rest_api_init', 'restrict_rest_api_to_localhost', 0 );

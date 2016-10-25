<?php
// Load the WordPress Environment
// define( 'WP_DEBUG', true ); /* uncomment for debug mode */
require('./wp-load.php');
// require_once ('./wp-admin/admin.php'); /* uncomment for is_admin() */
?>
<pre>
<?php

/* test stuff here */
var_dump( is_admin() );

?>
</pre>

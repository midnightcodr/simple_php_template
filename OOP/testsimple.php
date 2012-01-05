<?php
	require_once 'SimpleTemplate.php';

	$simple=new SimpleTemplate("Dear {{user}}, your pin number has been changed to {{pin}}.");

	$data=array(
		array( 'user'=>'John Smith', 'pin'=>'1234' ),
		array( 'user'=>'Mr. S', 'pin'=>'9999' ),
		array( 'user'=>'Customer', 'pin'=>'****' )
	);

	foreach($data as $d) {
		printf("%s\n", $simple->gen_msg($d));
	}

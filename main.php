<?php
	/* main.php */
	function build_key($key) {
		return '{{'.$key.'}}';
	}

        function gen_msg($format_str, $arr) {
		$keys=array_map(build_key, array_keys($arr));
		// $keys can also be generated by using the following code
		// but I found using array_map is more elegant
		// $keys=array();
		// foreach(array_keys($arr) as $k) {
		//	array_push($keys, '{{'.$k.'}}');
		// }

		return str_replace( $keys, array_values($arr), $format_str);
        }

	// here's the template
	$template="Dear {{user}}, your pin number has been changed to {{pin}}.";

	// here's the data, hard-coded in this example but it can be pulled from external sources as well
	$data=array(
		array( 'user'=>'John Smith', 'pin'=>'1234' ),
		array( 'user'=>'Mr. S', 'pin'=>'9999' ),
		array( 'user'=>'Customer', 'pin'=>'****' )
	);

	foreach($data as $d) {
		printf("%s\n", gen_msg($template, $d));
	}

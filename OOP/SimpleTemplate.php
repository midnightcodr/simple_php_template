<?php
	function build_key($k) {
		return '{{'.$k.'}}';
	}

	class SimpleTemplate {
		protected $_template;
		function __construct($template) {
			$this->_template=$template;
		}

		public function gen_msg($arr) {
			$keys=array_map( 'build_key' , array_keys($arr));
			return str_replace( $keys, array_values($arr), $this->_template );
		}
	}

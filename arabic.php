<?php 

	function lang( $phrase ) {

		static $lang = array(

			'MESSAGE' => 'ahlan',

			'ADMIN' => 'Moder'

		);

		return $lang[$phrase];

	}
<?php

return [

	"test_mode" => env('LB_TEST_MODE', true),

	"credentials" => [
			"auth_userid" => env('LB_AUTH_USERID', ''),
			"api_key" => env('LB_API_KEY', ''),
	],

	"no_of_record" => env('LB_NO_OF_RECORDS', 100),

	"interface" => env('LB_INTERFACE', null),

	'throw_exception' => false,

];

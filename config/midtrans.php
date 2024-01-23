<?php

return [
	'mercant_id' => env('MIDTRANS_MERCHAT_ID'),
	'client_key' => env('MIDTRANS_CLIENTKEY'),
	'server_key' => env('MIDTRANS_SERVERKEY'),
	'is_production' => true,
	'is_sanitized' => true,
	'is_3ds' => true,
];

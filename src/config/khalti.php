<?php
return [
		/*
		TEST KEYS
		Public Test key
		*/
		'test_public' => env('KHALTI_TEST_PUBLIC', 'test_public_key_0be0cce18982449a9b004c13c7c5303f'),

		/*Public Secret key*/
		'test_secret' => env('KHALTI_TEST_SECRET', 'test_secret_key_6195fea4d0cd48b49297ebcd6c7c6fb3'),

		/*
		LIVE KEYS
		Public Live key
		*/
		'live_public' => env('KHALTI_LIVE_PUBLIC', 'live_public_key_0be0cce18982449a9b004c13c7c5303f'),

		/*Public Secret key*/
		'live_secret' => env('KHALTI_LIVE_SECRET', 'live_secret_key_6195fea4d0cd48b49297ebcd6c7c6fb3'),
	];
<?php

Route::get('khalti', function(){
	return 'Testing Khalti Package!';
});

Route::get('khalti/purchase', 'Anoop\Khalti\KhaltiController@showPurchaseForm');

Route::get('khalti/verification', 'Anoop\Khalti\KhaltiController@transactionVerification')
	 ->name('khalti.verification');
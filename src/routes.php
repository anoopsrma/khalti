<?php

Route::get('khalti', function(){
	return 'Testing Khalti Package!';
});

Route::get('khalti/purchase', 'Anoop\Khalti\KhaltiController@showPurchaseForm');

Route::post('khalti/verification', 'Anoop\Khalti\KhaltiController@transaction')
	 ->name('khalti.verification');
	 
Route::get('subtract/{a}/{b}', 'Anoop\Khalti\KhaltiController@subtract');


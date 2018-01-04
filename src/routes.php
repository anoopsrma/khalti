<?php

Route::get('khalti', function(){
	return 'Testing Khalti Package!';
});

Route::get('khalti/purchase', 'Anoop\Khalti\KhaltiController@showPurchaseForm');
Route::get('subtract/{a}/{b}', 'Anoop\Khalti\KhaltiController@subtract');
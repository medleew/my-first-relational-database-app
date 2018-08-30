<?php 
Route::set('index.php', function() {
	Index::CreateView('Index');
});
Route::set('clients', function() {
	Clients::CreateView('Clients');
});
Route::set('admin', function() {
	Admin::CreateView('Admin');
});
Route::set('login', function() {
	Login::VerifyLogin();
});
 ?>
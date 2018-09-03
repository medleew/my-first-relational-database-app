<?php 
Route::set('index.php', function() {
	Index::CreateView('Index');
});
Route::set('clients', function() {
	Clients::CreateView('Clients');
});
Route::set('facture', function() {
	Invoices::CreateView('Invoices');
});
Route::set('facture-details', function() {
	InvoiceDetails::CreateView('InvoiceDetails');
});
Route::set('dashboard', function() {
	Dashboard::CreateView('Dashboard');
});
Route::set('update-invoice', function() {
	UpdateInvoice::CreateView('UpdateInvoice');
});
Route::set('login', function() {
	Login::VerifyLogin();
});
 ?>
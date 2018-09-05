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
Route::set('facture-add', function() {
	if ($_POST) {InvoiceAdd::VerifyAdd();}
	InvoiceAdd::CreateView('InvoiceAdd');
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
Route::set('logout', function() {
	Logout::LogUserOut();
});
Route::set('updateinvoicepost', function() {
	UpdateInvoicePOST::VerifyUpdateInvoice();
});
Route::set('deleteinvoice', function() {
	DeleteInvoice::DeleteInvoiceID();
});
Route::set('persons-details', function() {
	PersonsDetails::CreateView('PersonsDetails');
});
Route::set('persons', function() {
	Persons::CreateView('Persons');
});
Route::set('persons-update', function() {
	PersonsUpdate::CreateView('PersonsUpdate');
});
Route::set('personupdatepost', function() {
	PersonUpdatePOST::UpdatePersonDB();
});
Route::set('persons-delete', function() {
	PersonsDelete::DeletePersonsID();
});
Route::set('persons-add', function() {
	if ($_POST) {PersonsAdd::VerifyAdd();}
	PersonsAdd::CreateView('PersonsAdd');
});
 ?>
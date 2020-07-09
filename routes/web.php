<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/admin-users', 'UsersController');
Route::get('/welcome', function () {
        return view('welcome');
});
Route::get('/home', function () {
        return view('admin.dashboard');
});
Route::get('/', function () {
        return view('admin.map');
});
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin-calendar', function () {
    return view('admin.calendar');
});
Route::get('/admin-accounts', function () {
    return view('admin.table-accounts');
});
Route::get('/admin-leads', function () {
    return view('admin.table-leads');
});
Route::get('/admin-jobs', function () {
    return view('admin.table-jobs');
});
Route::get('/error-404', function () {
    return view('error-404');
});
Route::get('/error-500', function () {
    return view('error-500');
});
Route::get('/error-comingsoon', function () {
    return view('error-comingsoon');
});
Route::get('/error-maintenance', function () {
    return view('error-maintenance');
});
Route::get('/user-lock-screen', function () {
    return view('user-lock-screen');
});
Route::get('/user-login', function () {
    return view('user-login');
});
Route::get('/user-register', function () {
    return view('user-register');
});
Route::get('/admin-invoices', function () {
    return view('admin.invoices');
});
Route::get('/admin-invoice', function () {
    return view('admin.single-invoice');
});
Route::get('/admin-cases', function () {
    return view('admin.table-cases');
});
Route::get('/admin-reports', function () {
    return view('page-starter');
});
Route::get('/admin-quotes', function () {
    return view('admin.quotes');
});
Route::get('/admin-quote', function () {
    return view('admin.single-quote');
});
Route::get('/admin-calls', function () {
    return view('admin.table-calls');
});
Route::get('/admin-email-quote', function () {
    return view('admin.email-quote');
});
Route::get('/admin-email-booking', function () {
    return view('admin.email-booking');
});
Route::get('/admin-email-billoflanding', function () {
    return view('admin.email-billoflanding');
});
Route::get('/admin-branding', function () {
    return view('admin.branding');
});
Route::get('/admin-tokens', function () {
    return view('admin.tokens');
});
Route::get('/admin-rates', function () {
    return view('admin.rates');
});
Route::get('/admin-promotions', function () {
    return view('admin.promotions');
});
Route::get('/admin-booking', function () {
    return view('admin.booking');
});
/*Affiliate routes*/
Route::get('/affiliate-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/affiliate-submit-leads', function () {
    return view('affiliate.submit-leads');
});
Route::get('/affiliate-coupons', function () {
    return view('page-starter');
});
Route::get('/affiliate-earnings', function () {
    return view('admin.reports');
});
Route::get('/mover-calendar', function () {
    return view('admin.calendar');
});
//Sales Manager Routes
Route::get('/sales-manager-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/sales-manager-quotes', function () {
    return view('admin.quotes');
});
Route::get('/sales-manager-calendar', function () {
    return view('admin.calendar');
});
Route::get('/sales-manager-calls', function () {
    return view('admin.table-calls');
});
Route::get('/sales-manager-leads', function () {
    return view('admin.table-leads');
});
Route::get('/sales-manager-accounts', function () {
    return view('admin.table-accounts');
});
Route::get('/sales-manager-jobs', function () {
    return view('admin.table-jobs');
});
Route::get('/sales-manager-cases', function () {
    return view('admin.table-cases');
});
Route::get('/sales-manager-invoices', function () {
    return view('admin.invoices');
});
Route::get('/sales-manager-report-sales', function () {
    return view('admin.report-sales');
});
Route::get('/sales-manager-report-services', function () {
    return view('admin.report-services');
});
Route::get('/sales-manager-report-financials', function () {
    return view('admin.report-financials');
});
Route::get('/sales-manager-report-payroll', function () {
    return view('admin.report-payroll');
});
//Sales Agent Routes
Route::get('/sales-agent-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/sales-agent-booking', function () {
    return view('sales-agent.booking-form');
});
Route::get('/sales-agent-quotes', function () {
    return view('admin.quotes');
});
Route::get('/sales-agent-calendar', function () {
    return view('admin.calendar');
});
Route::get('/sales-agent-calls', function () {
    return view('admin.table-calls');
});
Route::get('/sales-agent-leads', function () {
    return view('admin.table-leads');
});
Route::get('/sales-agent-accounts', function () {
    return view('admin.table-accounts');
});
Route::get('/sales-agent-jobs', function () {
    return view('admin.table-jobs');
});
Route::get('/sales-agent-cases', function () {
    return view('admin.table-cases');
});
Route::get('/sales-agent-invoices', function () {
    return view('admin.invoices');
});
// Mover routes
Route::get('/mover-calendar', function () {
    return view('admin.calendar');
});
Route::get('/mover-jobs', function () {
    return view('admin.table-jobs');
});
Route::get('/mover-availability', function () {
    return view('mover.availability');
});
// Owner Operator Routes
Route::get('/owner-operator-users', function () {
    return view('admin.users.index');
});
Route::get('/owner-operator-email-quote', function () {
    return view('admin.email-quote');
});
Route::get('/owner-operator-email-booking', function () {
    return view('admin.email-booking');
});
Route::get('/owner-operator-email-billoflanding', function () {
    return view('admin.email-billoflanding');
});
Route::get('/owner-operator-branding', function () {
    return view('admin.branding');
});
Route::get('/owner-operator-tokens', function () {
    return view('admin.tokens');
});
Route::get('/owner-operator-rates', function () {
    return view('admin.rates');
});
Route::get('/owner-operator-promotions', function () {
    return view('admin.promotions');
});
Route::get('/owner-operator-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/owner-operator-calendar', function () {
    return view('admin.calendar');
});
Route::get('/owner-operator-jobs', function () {
    return view('admin.table-jobs');
});
Route::get('/owner-operator-cases', function () {
    return view('admin.table-cases');
});
Route::get('/owner-operator-invoices', function () {
    return view('admin.invoices');
});
Route::get('/owner-operator-report-sales', function () {
    return view('admin.report-sales');
});
Route::get('/owner-operator-report-services', function () {
    return view('admin.report-services');
});
Route::get('/owner-operator-report-financials', function () {
    return view('admin.report-financials');
});
Route::get('/owner-operator-report-payroll', function () {
    return view('admin.report-payroll');
});
// Client Routes
Route::get('/client-calendar', function () {
    return view('admin.calendar');
});
Route::get('/client-moves', function () {
    return view('admin.table-jobs');
});
Route::get('/client-quotes', function () {
    return view('admin.quotes');
});
Route::get('/client-invoices', function () {
    return view('admin.invoices');
});
Route::get('/client-cases', function () {
    return view('admin.table-cases');
});
Route::get('/client-public-feedback', function () {
    return view('client.public-feedback');
});
/*Test*/
Route::get('/test', function () {
    return view('admin.test-cargo');
});
Auth::routes();

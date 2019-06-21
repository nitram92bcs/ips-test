<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/module_reminder_assigner','ReminderController@moduleAssigner')->name('api.module_reminder_assigner');
Route::post('/infusionsoft_test_create_contact_by_email', 'InfusionsoftController@testInfusionsoftIntegrationCreateContactByEmail');
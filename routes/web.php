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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'BackEndController@Dashboard')->name('admin.dashboard');

    // System Setting Routes
    Route::get('general-setting', 'BackEndController@GeneralSetting')->name('general_setting');
    Route::POST('update-general-setting', 'BackEndController@GeneralSettingupdate')->name('update-general-setting');
    Route::POST('update-logo', 'BackEndController@updateLogo')->name('update-logo');
    Route::POST('update-fav', 'BackEndController@updateFav')->name('update-fav');

    Route::get('blood-donar-list', 'BackEndController@DonarList')->name('blood-donar-list');
    Route::get('blood-donar-deactive/{id}', 'BackEndController@Donardeactive')->name('blood-donar-deactive');
    Route::get('blood-donar-active/{id}', 'BackEndController@Donaractive')->name('blood-donar-active');


    Route::get('blood-request-active', 'BackEndController@BloodRequestActive')->name('blood-request-active');
    Route::get('blood-request-old', 'BackEndController@BloodRequestOld')->name('blood-request-old');

    Route::get('request-status/{request_id}/{id}', 'BackEndController@RequestStatus');

    Route::get('find-specific-donors/{fb_id}/{bg_id}/{div_id}/{dis_id}/{upa_id}/{uni_id}', 'BackEndController@FindSpecficDonar')->name('find_specific_donors');
    Route::get('request-details/{id}', 'BackEndController@RequestDetails')->name('request_details');
    Route::get('send-notification/{fb_id}/{bg_id}/{div_id}/{dis_id}/{upa_id}/{uni_id}', 'BackEndController@SendNotification')->name('send_notification');
    Route::get('send-notification-email/{bg_id}/{div_id}/{dis_id}/{upa_id}/{uni_id}', 'BackEndController@SendNotificationEmail')->name('send_notification_email');
});

Route::get('/', 'FrontEndController@index');

Route::get('ajaxDistricList', 'FrontEndController@ajaxDistricList')->name('ajaxDistricList');
Route::get('ajaxUpazilaList', 'FrontEndController@ajaxUpazilaList')->name('ajaxUpazilaList');
Route::get('ajaxUnionList', 'FrontEndController@ajaxUnionList')->name('ajaxUnionList');
Route::get('ajaxUnionList', 'FrontEndController@ajaxUnionList')->name('ajaxUnionList');

Route::group(['prefix' => 'donar','middleware'=>['auth','user']], function () {
    Route::get('dashboard', 'FrontEndController@dashboard')->name('user.dashboard');
    Route::get('find-blood', 'FrontEndController@FindBlood')->name('find_blood');
    
    Route::post('blood-request-submit', 'FrontEndController@BloodRequestSubmit')->name('blood_request_submit');

    Route::get('donate-blood', 'FrontEndController@DonateBlood')->name('donate_blood');
    Route::get('view-request-details/{id}', 'FrontEndController@RequestDetails')->name('view_request_details');
    Route::get('blood-request-details/{id}', 'FrontEndController@BloodRequestDetails')->name('blood_request_details');
    Route::get('previous-record', 'FrontEndController@PreviousRecord')->name('previous_record');
    Route::get('want-to-donate/{id}', 'FrontEndController@WantToDonate')->name('want_to_donate');
});
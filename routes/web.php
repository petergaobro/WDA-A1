<?php

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


use App\Models\Ticket;
use Illuminate\Support\Facades\Input;
use App\CommentDetails;



Route::get('/', 'PagesController@home');

Route::get('FAQ',
    ['as' => 'FAQ', 'uses' => 'AboutController@create']);

Route::post('FAQ',
    ['as' => 'contact_store', 'uses' => 'AboutController@store']);


Route::resource('ticket', 'TicketController');


Route::get('track',
    ['as' => 'track', 'uses' => 'TrackController@create']);



Route::get('thankyou', function () {
    return view('ticket.thankyou');
})->name('thankyou');


Route::resource('its','ITSController');


Route::resource('comment', 'CommentController');



Route::any('track.search',function(){

    $q = Input::get ( 'q' );
    $tick = Ticket::where('id','LIKE','%'.$q.'%')->get();
    $comm = CommentDetails::where('Ticket_id','LIKE','%'.$q.'%')->get();

    if(count($tick) > 0)

        return view('track.search')->withDetails($tick)->withDet($comm)->withQuery( $q );

    else return view ('track.search')->withMessage('No Details found. Try to search again !');
});

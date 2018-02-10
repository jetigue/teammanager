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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
	'athletes' 				=>	'AthletesController',
	'genders'				=>	'GendersController',
	'meet_hosts'			=>	'MeetHostsController',
	'race_divisions'		=>	'RaceDivisionsController',
	'seasons'				=>	'SeasonsController',
	'timing'				=>	'TimingMethodsController',
	'track/events'			=>	'TrackEventsController',
	'track/meet_names'		=>	'TrackMeetNamesController',
	'track/venues'			=>	'TrackVenuesController',
	'track/meets'			=>	'TrackMeetsController',
	'track/team_results'	=>	'TrackTeamResultsController',
	'track/individual_results'	=>	'TrackIndividualResultsController'
]);



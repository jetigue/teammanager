<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TrackMeet::class, function (Faker $faker) {
    return [
    	'meet_date' => $faker->date($format = 'Y-m-d'),
        'track_meet_name_id' => App\Models\TrackMeetName::all()->random()->id,
        'track_venue_id'	=> App\Models\TrackVenue::all()->random()->id,
        'meet_host_id'	=> App\Models\MeetHost::all()->random()->id,
        'season_id'	=>	App\Models\Season::all()->random()->id,
        'timing_method_id'	=> App\Models\TimingMethod::all()->random()->id,
    ];
});

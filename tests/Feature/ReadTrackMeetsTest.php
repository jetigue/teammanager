<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadTrackMeetsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp(); 
        
        factory('App\Models\TrackMeetName')->create();
        factory('App\Models\TrackVenue')->create();
        factory('App\Models\MeetHost')->create();
        factory('App\Models\Season')->create();
        factory('App\Models\TimingMethod')->create();

        $this->trackMeet = factory('App\Models\TrackMeet')->create();  
    }

    /** @test */
    public function a_user_can_views_all_track_meets()
    {
        $this->response = $this->get('/track/meets')
            ->assertSee($this->trackMeet->trackMeetName->meet_name);
    }

    /** @test */
    function a_user_can_views_a_specific_track_meet()
    {
        $this->response = $this->get('/track/meets/' . $this->trackMeet->id)
            ->assertSee($this->trackMeet->trackMeetName->meet_name);
    }

    /** @test */
    function a_user_can_view_team_results_that_are_associated_with_a_track_meet()
    {
        $trackTeamResult = factory('App\Models\TrackTeamResult')
            ->create(['track_meet_id' => $this->trackMeet->id]);

            $this->get('/track/meets/' . $this->trackMeet->id)
                ->assertSee($this->$trackTeamResult->points);
    }
}

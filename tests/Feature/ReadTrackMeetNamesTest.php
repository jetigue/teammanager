<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadTrackMeetNamesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp(); 
     
        $this->trackMeetName = factory('App\Models\TrackMeetName')->create();  
    }

    /** @test */
    public function a_user_can_views_all_track_meet_names()
    {
        $this->response = $this->get('/track/meet_names')
            ->assertSee($this->trackMeetName->meet_name);
    }

    /** @test */
    function a_user_can_views_a_specific_track_meet_name()
    {

        $this->response = $this->get('/track/meet_names/' . $this->trackMeetName->id)
            ->assertSee($this->trackMeetName->meet_name);
    }
}
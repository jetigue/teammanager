<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadTrackEventsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp(); 
     
        $this->trackEvent = factory('App\Models\TrackEvent')->create();  
    }

    /** @test */
    public function a_user_can_views_all_track_events()
    {
        $this->response = $this->get('/track/events')
            ->assertSee($this->trackEvent->event);
    }

    /** @test */
    function a_user_can_views_a_specific_track_event()
    {
        $this->response = $this->get('/track/events/' . $this->trackEvent->id)
            ->assertSee($this->trackEvent->event);
    }
}

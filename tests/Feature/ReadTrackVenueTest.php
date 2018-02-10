<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadTrackVenuesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp(); 
     
        $this->trackVenue = factory('App\Models\TrackVenue')->create();  
    }

    /** @test */
    public function a_user_can_views_all_track_venues()
    {
        $this->response = $this->get('/track/venues')
            ->assertSee($this->trackVenue->venue);
    }

    /** @test */
    function a_user_can_views_a_specific_track_venue()
    {
        $this->response = $this->get('/track/venues/' . $this->trackVenue->id)
            ->assertSee($this->trackVenue->venue);
    }
}

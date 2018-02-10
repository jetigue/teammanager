<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadAthletesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->athlete = factory('App\Models\Athlete')->create();
    }

    /** @test */
    public function a_user_can_view_all_athetes()
    {
        $this->get('/athletes')
            ->assertSee($this->athlete->last_name);
    }

        /** @test */
        function a_user_can_view_a_specific_athlete()
    {
        $this->get('/athletes/' . $this->athlete->id)
            ->assertSee($this->athlete->last_name);
    }
}

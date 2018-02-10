<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadGenderTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->gender = factory('App\Models\Gender')->create();
    }

    /** @test */
    public function a_user_can_view_all_genders()
    {
        $this->get('/genders')
            ->assertSee($this->gender->gender);
    }

        /** @test */
        function a_user_can_view_a_specific_gender()
    {
        $this->get('/genders/' . $this->gender->id)
            ->assertSee($this->gender->gender);
    }
}

class ReadMeetHostTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->meetHost = factory('App\Models\MeetHost')->create();
    }

    /** @test */
    public function a_user_can_view_all_meet_hosts()
    {
        $this->get('/meet_hosts')
            ->assertSee($this->meetHost->host);
    }

        /** @test */
        function a_user_can_view_a_specific_meet_host()
    {
        $this->get('/meet_hosts/' . $this->meetHost->id)
            ->assertSee($this->meetHost->host);
    }
}

class ReadRaceDivisionTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->raceDivision = factory('App\Models\RaceDivision')->create();
    }

    /** @test */
    public function a_user_can_view_all_race_divisions()
    {
        $this->get('/race_divisions')
            ->assertSee($this->raceDivision->name);
    }

        /** @test */
        function a_user_can_view_a_specific_race_divisions()
    {
        $this->get('/race_divisions/' . $this->raceDivision->id)
            ->assertSee($this->raceDivision->name);
    }
}

class ReadTimingMethodTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->timingMethod = factory('App\Models\TimingMethod')->create();
    }

    /** @test */
    public function a_user_can_view_all_timing_methods()
    {
        $this->get('/timing')
            ->assertSee($this->timingMethod->name);
    }

        /** @test */
        function a_user_can_view_a_specific_timing_method()
    {
        $this->get('/timing/' . $this->timingMethod->id)
            ->assertSee($this->timingMethod->name);
    }
}

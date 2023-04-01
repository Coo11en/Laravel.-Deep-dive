<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbacksControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_feedback_successful_page(): void
    {

        $response = $this->get(route('feedback'));

        $response->assertStatus(200);
    }
}

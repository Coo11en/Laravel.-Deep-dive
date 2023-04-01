<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_categories_can_be_return(): void
    {
       $view = $this->view();

        $view->assertSee('1');
    }
}

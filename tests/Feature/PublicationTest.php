<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase; 

class PublicationTest extends TestCase
{
    use RefreshDatabase; 

    public function test_la_page_des_contenus_est_accessible()
    {
        $response = $this->get('/contenus');
        $response->assertStatus(200);
    }

    public function test_l_api_des_publications_est_accessible()
    {
        $response = $this->get('/api/publications');
        $response->assertStatus(200);
    }
}
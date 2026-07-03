<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_web_development_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/web-development');
        $response->assertStatus(200);
        $response->assertSee('Web Development for');
        $response->assertSee('isometric-stack-container');
    }

    public function test_mobile_apps_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/mobile-apps');
        $response->assertStatus(200);
        $response->assertSee('Mobile App Development for');
        $response->assertSee('isometric-stack-container');
    }

    public function test_seo_optimization_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/seo-optimization');
        $response->assertStatus(200);
        $response->assertSee('SEO Optimization for');
        $response->assertSee('isometric-stack-container');
    }

    public function test_odoo_erp_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/odoo-erp');
        $response->assertStatus(200);
        $response->assertSee('Odoo ERP Customization for');
        $response->assertSee('isometric-stack-container');
    }

    public function test_ai_automation_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/ai-automation');
        $response->assertStatus(200);
        $response->assertSee('AI Automation to');
        $response->assertSee('isometric-stack-container');
    }

    public function test_cloud_computing_service_page_returns_successful_response(): void
    {
        $response = $this->get('/services/cloud-computing');
        $response->assertStatus(200);
        $response->assertSee('Cloud Services');
        $response->assertSee('DevOps');
        $response->assertSee('isometric-stack-container');
    }
}

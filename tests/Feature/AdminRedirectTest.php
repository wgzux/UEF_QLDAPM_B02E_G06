<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminRedirectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test guest is redirected to admin login.
     */
    public function test_guest_is_redirected_to_admin_login()
    {
        $response = $this->get('/admin');

        $response->assertRedirect(route('admin.login'));
    }
}

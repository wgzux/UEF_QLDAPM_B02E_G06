<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\DatabaseSeeder;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test admin can login after running seeders.
     */
    public function test_admin_can_login_after_seeding()
    {
        // 1. Run the database seeder (which should include AdminUserSeeder)
        $this->seed(DatabaseSeeder::class);

        // 2. Verify the admin user exists in the database
        $this->assertDatabaseHas('users', [
            'email' => 'admin@wanderingrose.com',
            'role' => 'admin',
        ]);

        // 3. Attempt to login
        $response = $this->post('/admin/login', [
            'email' => 'admin@wanderingrose.com',
            'password' => 'password',
        ]);

        // 4. Assert login successful (redirects to dashboard)
        $response->assertRedirect('/admin/dashboard');
        
        // 5. Assert authenticated
        $this->assertAuthenticated();
        
        // 6. Check if we can access the dashboard
        $this->get('/admin/dashboard')->assertStatus(200);
    }
}

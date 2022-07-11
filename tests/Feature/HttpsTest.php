<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class HttpsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_root_path()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/home');

        // because redirect
        $response->assertStatus(200);
    }

    public function test_definition_path()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/definition');

        // because redirect
        $response->assertStatus(200);
    }

    public function test_impact_path()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/impact');

        // because redirect
        $response->assertStatus(200);
    }

    public function test_login_path()
    {
        $response = $this->get('/login');

        // because redirect
        $response->assertStatus(200);
    }

    public function test_prevention_path()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/prevention');

        // because redirect
        $response->assertStatus(200);
    }

    // public function test_child_index()
    // {
    //     $response = $this->get('/registration');

    //     $response->assertStatus(200);
    // }

    // public function test_child_create()
    // {
    //  $user = User::factory()->create();

    //$response = $this->actingAs($user)
    // ->withSession(['banned' => false])
    //     ->get('/child');
    //  $response->assertStatus(200);
    // }

    // public function test_login()
    // {
    //     $user = User::factory()->create();

    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'password',
    //     ]);

    //     $this->assertAuthenticated();
    //     $response->assertRedirect('/home');
    // }

}

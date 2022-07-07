<?php

namespace Tests\Feature\Auth;

use App\Post;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_required_field_login()
    // {
    //     $this->json('POST', 'api/login', ['Accept' => 'application/json'])
    //         ->assertStatus(422)
    //         ->assertJson([
    //             "message" => "The given data was invalid.",
    //             "errors" => [
    //                 "name" => ["The name field is required."],
    //                 "email" => ["The email field is required."],
    //             ]
    //         ]);
    // }

    public function registered_user_can_login()
    {
        // create login 
        $user = factory(User::class)->create([
            'email' => 'test@gmail.com',
            'password' => bcrypt('123456'),
         ]);

        // kita memiliki user yang terdaftar
        $data = [
            'email' => 'test@gmail.com',
            'password' => '123456'
        ];

        // kunjungi route login
        $this->json('POST', 'api/login', $data, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "user" => [
                    'id',
                    'name',
                    'email',
                    'email_verified_at',
                    'created_at',
                    'updated_at',
                ],
                 "access_token",
                 "message"
             ]);
 
         $this->assertAuthenticated();
    }

}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UpdateNoteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/api/v1/notebook/14',
        [
            'user_id'=>1,
            'email'=>'regre@frg.regre', 
            'image'=>'egrgr',
            'last name'=>'fger',
            'first name'=>'fe',
            'surname'=>'gerg',
            'company'=>'rrer',
            'phone'=>'re',
            'birthday'=>'2019-2-2'
        ]);

        $response->assertStatus(200);
    }
}

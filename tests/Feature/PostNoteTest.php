<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostNoteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/api/v1/notebook', [
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

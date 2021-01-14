<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;
use Carbon\Carbon;
class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_author_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/authors',[
            'name' => 'Author name',
            'dob' => '02/02/2020'
        ]);

        $authors= Author::all();
        $this->assertCount(1,$authors);
        $this->assertInstanceOf(Carbon::class,$authors->first()->dob);
        $this->assertEquals('2020/02/02',$authors->first()->dob->format('Y/m/d'));
    }
}

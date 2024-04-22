<?php

namespace Tests\Feature;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class TopicTest extends TestCase
{
    use RefreshDatabase;
    /**
     * In the name of god, ultimate Merciful one, the ultimate forgiving one,
     * A basic feature test example.
     */
    public function test_topic_data_in_json(): void
    {
        $response = $this->get('/topics');

        $response->assertJson([
            __('topics') => [
                __('religion') => [
                    __('discussion') => __('Religion came to sort out poeple problems'),
                    __('topic_rating_on_site') => 8,
                    __('written_by') => 'khorram'
                ],
                __('politics') =>  [
                    __('discussion') => __('War is not the solution to all problems'),
                    __('topic_rating_on_site') => 6,
                    __('written_by') => 'khorram'
                ]
            ]
        ]);
        $response->assertStatus(200);
    }

    public function test_topic_is_json(): void
    {
        $response = $this->withHeader('Content-Type', 'application/json')->get('/topics');

        $response->assertHeader('Content-Type', 'application/json');
    }


    public function test_get_topic_from_database():void {

        $user = new User();
        $password = Hash::make('password124');
        $user->fill(
            [
                'name' => 'khorram',
                'email' => 'khorram@test.com',
                'password' => $password
            ]);


        $user->save();

        $topic =  new Topic();
        $topic->fill([
            'type' => 'religion',
            'discussion' => 'religion is improve lives',
            'topic_rating' => 8,
            'user_id' => $user->id
        ]);

        $topic->save();


        $this->assertDatabaseHas($topic, [
            'type' => 'religion',
            'discussion' => 'religion is improve lives',
            'topic_rating' => 8,
            'user_id' => $user->id
        ]);


        $this->assertDatabaseHas($user,  [
            'name' => 'khorram',
            'email' => 'khorram@test.com',
            'password' => $password
        ]);
    }
}

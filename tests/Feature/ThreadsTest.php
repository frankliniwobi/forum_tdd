<?php

use App\Models\Thread;
use App\Models\User;

it('returns a successful response', function () {
    $response = $this->get('/threads');

    $response->assertStatus(200);
});

it('can see a thread', function () {
    $thread = Thread::factory()->create([
        'user_id' => User::factory()->create()
    ]);

    $response = $this->get('/threads');

    $response->assertSee($thread->title);
});

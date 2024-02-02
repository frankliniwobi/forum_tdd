<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(30)->create();

        $threads = Thread::factory(100)->recycle($users)->create();

        $replies = Reply::factory(400)->recycle($users)->recycle($threads)->create();
    }
}

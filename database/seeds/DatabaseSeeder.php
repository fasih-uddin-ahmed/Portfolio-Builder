<?php

use App\User;
use App\Profile;
use App\Project;
use App\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)
            ->create()
            ->each(function($user) {
                $user->profile()->save(factory(Profile::class)->make());
                $user->projects()->saveMany(factory(Project::class, 5)->make());
                $user->messages()->saveMany(factory(Message::class, 3)->make());
            });
    }
}

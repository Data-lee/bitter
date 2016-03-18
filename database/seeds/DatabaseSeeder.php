<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 50)->create()->each(function($user) { 
        	// Create posts
        	foreach (range(1, rand(2, 5)) as $int) {	
        		$post = factory(App\Post::class)->make();
        		$user->posts()->save($post);
        	}

        	$user->subscribedPosts()->attach(rand(1, App\Post::all()->count()));
        });	        
    }
}

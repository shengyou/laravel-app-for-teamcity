<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $faker = Factory::create('zh_TW');
        $amount = 10;

        foreach (range(1, $amount) as $id) {
            Post::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'created_at' => Carbon::now()->subDays($amount - $id),
                'updated_at' => Carbon::now()->subDays($amount - $id)->addHours(rand(1, 12))->addMinutes(rand(1, 60)),
            ]);
        }
    }
}

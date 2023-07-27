<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

    // Generate 10 fake posts with videos
    for ($i = 0; $i < 20; $i++) {
        $post = new Post();
        $post->title = $faker->sentence;
        $post->description = $faker->paragraph;
        $post->save();

        // Generate a fake video URL
        $videoUrl = $faker->randomElement([
            'https://www.youtube.com/watch?v=UUY5h3S6NTg',
        ]);

        // Attach the video to the post
        $post->addMediaFromUrl($videoUrl)->toMediaCollection('videos');
        }
    }
}

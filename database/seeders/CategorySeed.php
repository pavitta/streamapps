<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            'Video Streaming Services',
            'Audio Streaming Services',
            'Niche & Specialized Streaming'
        ];

        foreach ($category as $value) {
            Category::firstOrCreate(['name' => $value]);
        }
    }
}

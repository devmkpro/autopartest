<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = \App\Models\Part::all();
        $categories = \App\Models\Category::all();
        $parts->each(function ($part) use ($categories) {
            $part->categories()->attach(
                $categories->random(rand(1, 3))->pluck('uuid')->toArray()
            );
        });
    }
}

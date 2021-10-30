<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Database\Seeders\ProjectSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(20)->create();
        // $this->call(ProjectSeeder::class);
    }
}

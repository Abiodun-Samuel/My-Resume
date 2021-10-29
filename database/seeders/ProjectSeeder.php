<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('projects')->insert([
                'project_category' => Str::random(4),
                'state' => Str::random(5),
                'main_image' => Str::random(10),
                'images' => json_encode(array(Str::random(10), Str::random(10), Str::random(10))),
                'title' => Str::random(5) . '' . Str::random(5) . '' . Str::random(5),
                'description' => Str::random(5) . ',' . Str::random(5) . '' . Str::random(5),
                'tech_stack' =>  json_encode(
                    array(Str::random(6), Str::random(8), Str::random(9))
                ),
                'slug' => Str::random(9),
                'user_id' => 1,
                'project_link' => Str::random(10),
                'github_link' => Str::random(10),
            ]);
        }
    }
}

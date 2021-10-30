<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Str::random(5) . '' . Str::random(5) . '' . Str::random(5),
            'body' => Str::random(5) . ',' . Str::random(5) . '' . Str::random(5),
            'category' => Str::random(4),
            'slug' => Str::random(9),
            'user_id' => 1,
            'keywords' => Str::random(5) . ',' . Str::random(5) . '' . Str::random(5)
        ];
    }
}

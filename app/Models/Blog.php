<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'tech_stack',
        'slug',
        'user_id',
        'project_link',
        'github_link',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

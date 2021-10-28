<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_category',
        'state',
        'main_image',
        'images',
        'title',
        'description',
        'tech_stack',
        'slug',
        'user_id',
        'project_link',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

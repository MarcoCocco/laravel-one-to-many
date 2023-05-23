<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'github_link', 'type_id', 'language', 'creation_date', 'is_complete', 'slug'];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}

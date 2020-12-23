<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'updated_at',
        'imdb_name_id',
        'name',
        'height',
        'bio',
        'date_of_birth',
        'place_of_birth',
        'children',
        'is_usa',
        'is_europe'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mh extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'userid',
        'gender',
        'contact',
        'series',
        'head',
        'shoulder',
        'arm',
        'waist',
        'leg',
        'photo',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
    ];
}

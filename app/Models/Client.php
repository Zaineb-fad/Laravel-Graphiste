<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;


class Client extends Model implements HasMedia
{

    use HasFactory,HasMediaTrait ;
    
    protected $fillable = [
        'name',
        'email',
    ];

}
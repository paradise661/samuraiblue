<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'status',
        'name',
        'position',
        'slug',
        'short_description',
        'description',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp',
        'email'
    ];}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'phone', 'facebook', 'twitter', 'linkedin', 'instagram', 'image'];
}
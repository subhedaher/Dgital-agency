<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'message', 'status'];

    protected $appends = ['status_active'];

    protected function statusActive(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status ? 'read' : 'not read'
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['Snumber', 'ea', 'pass'];
        
         protected function casts(): array
            {
                return [
                    'pass' => 'hashed',
                ];
            }
}

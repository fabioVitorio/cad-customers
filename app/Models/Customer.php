<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'name', 
        'email', 
        'status'
    ];

    
    protected $hidden = [
        // Exemplo: 'password' - você pode adicionar se necessário
    ];


    protected $casts = [
        // Exemplo: 'created_at' => 'datetime' - você pode adicionar se necessário
    ];
}

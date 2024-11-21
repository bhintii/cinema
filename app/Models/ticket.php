<?php

namespace App\Models;

use Illuminate\Validation\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
   
    protected $fillable = ['ticket_code', 'price'];

    public function moviegoers()
    {
        return $this->hasMany(moviegoers::class);
    }
}

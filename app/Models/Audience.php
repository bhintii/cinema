<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Audience extends Model
{
    use HasFactory;

    protected $fillable = ['ticket', 'ticket_id', 'birthdate'];

    public function audience()
    {
        return $this->belongsTo(Audience::class);
    }

}

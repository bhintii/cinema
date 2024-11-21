<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Moviegoer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ticket_id', 'birthdate'];

    public function moviegoer()
    {
        return $this->belongsTo(Moviegoer::class);
    }

}

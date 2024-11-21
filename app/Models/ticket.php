<?php

namespace App\Models;

use Illuminate\Validation\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket',
        'price'
    ];

    public function moviegoer()
    {
        return $this->hasMany(Moviegoer::class);
    }

    public static function rules($process)
    {
        if ($process == 'insert') {
            return [
                'ticket' => 'required|string|max:225',
                'price' => 'required|integer',
            ];
        } elseif ($process == 'update') {
            return [
                'ticket' => 'required|string|max:225', 
                'price' => 'required|integer',
            ];
        }
    }

    public static function customValidation(Validator $validator)
    {
        $customAttributes = [
            'ticket' => 'Kode Tiket',
            'price' => 'Harga'
        ];

        $validator->addReplacer('required', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus diisi.');
        });

        $validator->addReplacer('price', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus berupa angka.');
        });
    }
}
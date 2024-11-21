<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;

class moviegoers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ticket_id', 'birth date'];

    public function ticket()
    {
        return $this->hasMany(ticket::class);
    }

    public function rules($process)
    {
        if($process == 'create'){
            return [
                'name' => 'required|string|max:255',
                'ticket_id' => 'required|exists:ticket,id',
                'birth date' => 'required|date',
            ];
        }elseif($process == 'update'){
            return [
                'name' => 'sometimes|string|max:255',
                'ticket_id' => 'sometimes|exists:ticket,id',
                'birth date' => 'sometimes|date',
            ];
        }
    }

    public static function customValidation(Validator $validator)
    {
        $customAttributes = [
            'name' => 'Nama',
            'price' => 'Harga',
        ];

        $validator->addReplacer('required', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus diisi.');
        });

        $validator->addReplacer('price', function ($message, $attribute, $rule, $parameters) use ($customAttributes) {
            return str_replace(':attribute', $customAttributes[$attribute], ':attribute harus berupa angka.');
        });
    }
}

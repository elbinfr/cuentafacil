<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id', 'dni', 'first_name', 'last_name', 'birthdate', 'address', 'phone_number', 'email'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table="appointments";

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

}

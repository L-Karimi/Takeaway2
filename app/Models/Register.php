<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'password'
    ];
}

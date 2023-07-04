<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'birthday',
        'birth_place',
        'photo',
        'father_name',
        'mother_name',
        'contact_no',
        'email',
        'qualification',
        'work_exp',
        'political_affairs',
        'lang',
        'travel_abroad',
    ];
}

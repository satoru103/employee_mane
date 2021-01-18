<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table ='employees';

    protected $fillable =[
        'name',
        'user_id',
        'address_id',
        'Department',
        'email',
        'postcode',
        'pref',
        'address1',
        'address2',
        'profile_img'
    ];
}

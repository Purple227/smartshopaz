<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_of_birth',
        'gender',
        'address',
        'L_G_A',
        'state',
        'country',
        'ron_code',
        'user_id'
    ];

}

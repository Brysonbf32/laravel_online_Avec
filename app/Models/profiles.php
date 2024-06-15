<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $table = 'profiles';

    protected $fillable = [
        'profile_name',
        'profile_datenaissance',
        'profile_image',
    ];
}

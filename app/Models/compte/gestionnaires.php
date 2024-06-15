<?php

namespace App\Models\compte;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestionnaires extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $table = 'gestionnaires';

    protected $fillable = [
        'nom_gest',
        'address_gest',
        'telephone_gest',
        'identite_gest',
        'password_gest',
    ];
}

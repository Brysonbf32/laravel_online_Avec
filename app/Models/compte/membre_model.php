<?php

namespace App\Models\compte;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membre_model extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $table = 'membres';
    
    protected $fillable = [
        'nom_membre',
        'address_mebre',
        'telephone_membre',
        'identite_membre',
        'password_membre',
    ];

}

<?php

namespace App\Models\compte;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class gestionavecs extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $table = 'gestionavec';

    protected $fillable = [
        'titre_attr',
        'gestionnaires_id',
        'comptes_id',
        'status_attr',
    ];
}

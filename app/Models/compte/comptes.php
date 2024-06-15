<?php

namespace App\Models\compte;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class comptes extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $table = 'comptes';

    protected $fillable = [
        'nom_avec',
        'nombre_avec',
        'montantmax_avec',
        'nombrecycle_avec',
        'description_avec',
    ];
}

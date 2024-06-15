<?php

namespace App\Models\permissions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class permission extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $table = 'permissions';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guard_name',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bouquets extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $table = 'bouquets';

    protected $fillable = [
        'bq_photo',
        'bq_titre',
        'bq_type',
        'bq_nombreachat',
        'bq_montant',
        'bq_dateAchat',
    ];
}

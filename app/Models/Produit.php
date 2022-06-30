<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'label',
        'description',
        'support',
        'management',
        'dateP',
        'fichier_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boissons extends Model
{
    protected $fillable = [
        'nom', 'description', 'img_path', 'quantite'
    ];
}

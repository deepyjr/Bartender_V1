<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    protected $fillable = [
        'etat', 'boisson_id', 'date_commande', 'user_id'
    ];
}

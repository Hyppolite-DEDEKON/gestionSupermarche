<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'stock',
        'quantite',
        'date',
        'agent_id',
    ];

    // Relation avec le modèle Produit
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}

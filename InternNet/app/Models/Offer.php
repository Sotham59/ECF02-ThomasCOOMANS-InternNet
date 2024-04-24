<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'company'];

    // Relation avec l'utilisateur (entreprise) qui a créé l'offre
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "localisation"];

    public function internship() : BelongsTo
    {
        return $this->belongsTo(internship_opportunities::class);
    }

    public function user() : HasMany
    {
        return $this->hasMany(User::class);
    }

}

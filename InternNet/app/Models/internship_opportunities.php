<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class internship_opportunities extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "email", "user_id", "company_id"];

    public function company() : BelongsTo
    {
        return $this->belongsTo(companies::class);
    }

    public function user() : HasMany
    {
        return $this->hasMany(User::class);
    }


}


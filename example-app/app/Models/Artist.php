<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vinyle;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function vinyles()
    {
        return $this->hasMany(Vinyle::class);
    }
}

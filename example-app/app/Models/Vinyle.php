<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Artist;
use Laravel\Scout\Searchable;


class Vinyle extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'year',
        'label',
        'description',
        'price',
    ];

    public function toSearchableArray()
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];
    }

    public function tags() 
    {
        return $this->belongsToMany(Tag::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
 


 
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

        $this->loadMissing(['artist', 'tags']);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            // 'artist' => $this->artist ? $this->artist->name : null,
            // 'tags' => $this->tags->pluck('name')->toArray(),
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
 


 
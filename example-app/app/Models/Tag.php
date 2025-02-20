<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vinyle;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name'];

    public function toSearchableArray()
    {
 
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

    public function vinyles()
    {
        return $this->belongsToMany(Vinyle::class);
    }

    public static function getBadgeClass(string $tagName): string
    {
        $colors = [
            'Rock' => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
            'Pop' => 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300',
            'Jazz' => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300',
            'Electro' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
            'Hip-Hop' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
            'Soul' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
        ];

        return $colors[$tagName] ?? 'bg-gray-200 text-gray-800 dark:bg-gray-600 dark:text-gray-300';
    }


}

   
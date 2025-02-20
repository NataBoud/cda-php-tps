<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}



   // public static function all(): array
    // {
    //     return [
    //         'Progressive Rock' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
    //         'Pop' => 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300',
    //         'Rock' => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
    //         'Soul / R&B' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
    //         'Electro / Disco' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
    //     ];
    // }

    // public static function getBadgeClass(string $genre): string
    // {
    //     $genres = self::all();
    //     return $genres[$genre] ?? 'bg-gray-200 text-gray-800 dark:bg-gray-600 dark:text-gray-300';
    // }
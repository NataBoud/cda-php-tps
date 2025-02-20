<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyl extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'year',
        'label',
        'description',
        'price',
    ];

    // public static function getBadgeClass(string $genre): string
    // {
    //     return Genre::getBadgeClass($genre);
    // }
}
 


 // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Dark Side of the Moon',
    //             'artist' => 'Pink Floyd',
    //             'year' => 1973,
    //             'label' => 'Harvest Records',
    //             'genre' => 'Progressive Rock',
    //             'description' => 'Un album emblématique qui a marqué l’histoire du rock avec des morceaux légendaires comme "Time" et "Money".',
    //             'price' => '$35.99'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Thriller',
    //             'artist' => 'Michael Jackson',
    //             'year' => 1982,
    //             'label' => 'Epic Records',
    //             'genre' => 'Pop',
    //             'description' => 'L’album le plus vendu de tous les temps, avec des hits incontournables comme "Billie Jean" et "Thriller".',
    //             'price' => '$29.99'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Abbey Road',
    //             'artist' => 'The Beatles',
    //             'year' => 1969,
    //             'label' => 'Apple Records',
    //             'genre' => 'Rock',
    //             'description' => 'Un classique intemporel avec des morceaux iconiques comme "Come Together" et "Here Comes the Sun".',
    //             'price' => '$32.50'
    //         ],
    //         [
    //             'id' => 4,
    //             'title' => 'Back to Black',
    //             'artist' => 'Amy Winehouse',
    //             'year' => 2006,
    //             'label' => 'Island Records',
    //             'genre' => 'Soul / R&B',
    //             'description' => 'Un album profond et émouvant porté par la voix unique d’Amy Winehouse, avec des titres comme "Rehab".',
    //             'price' => '$27.99'
    //         ],
    //         [
    //             'id' => 5,
    //             'title' => 'Random Access Memories',
    //             'artist' => 'Daft Punk',
    //             'year' => 2013,
    //             'label' => 'Columbia Records',
    //             'genre' => 'Electro / Disco',
    //             'description' => 'Un album moderne inspiré du disco et de la funk, avec des tubes comme "Get Lucky".',
    //             'price' => '$34.99'
    //         ],
    //         [
    //             'id' => 6,
    //             'title' => 'Abbey Road',
    //             'artist' => 'The Beatles',
    //             'year' => 1969,
    //             'label' => 'Apple Records',
    //             'genre' => 'Rock',
    //             'description' => 'Un classique intemporel avec des morceaux iconiques comme "Come Together" et "Here Comes the Sun".',
    //             'price' => '$32.50'
    //         ],
    //     ];
    // }